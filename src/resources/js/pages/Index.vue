<template>
  <div>
    ここはVueのみで作成されたページ
    <ul>
      <li>
        <router-link :to="{name: 'test'}">
          テストページへ
        </router-link>
      </li>
      <li>
        <router-link :to="{name: 'demo'}">
          デモページへ
        </router-link>
      </li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'Index'
};
</script>

<style scoped>

</style>
