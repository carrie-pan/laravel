<template>
  <div class="container">
    <!--<router-link class="btn btn-default" to="/home">登入</router-link>-->
    <router-link class="btn btn-primary" to="/create">新增</router-link>
    <table class="table table-hover">
      <thead>
        <th>標題</th>
        <th>內容</th>
      </thead>
      <tbody>
        <router-link
          tag="tr"
          v-for="post in posts"
          :key="post.id"
          :to="`${post.id}`"
        >
          <td>{{ post.title }}</td>
          <td>{{ post.content }}</td>
        </router-link>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data: () => {
    return {
      posts: []
    };
  },
  created() {
    axios.get('api/crud').then(response => {
      this.posts = response.data.posts;
    });
  }
};
</script>