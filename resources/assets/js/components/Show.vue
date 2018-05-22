<template>
  <div class="container" v-if="post">
    <h1>{{ post.title }}</h1>
    <div>{{ post.content }}</div>
    <router-link class="btn btn-default" to="/">返回</router-link>
    <router-link class="btn btn-primary" :to="`/${post.id}/edit`">編輯</router-link>
    <button class="btn btn-danger" data-toggle="modal" data-target="#myModal">刪除</button>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <h4>是否刪除？</h4>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" @click="destroy">刪除</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => {
    return {
      post: null
    };
  },
  created() {
    const id = this.$route.params.id;
    axios.get(`api/crud/${id}`).then(response => {
      this.post = response.data.post;
    });
  },
  methods: {
    destroy() {
      axios.delete(`api/crud/${this.post.id}`).then(() => {
        this.$router.push('/');
      });
    }
  }
};
</script>