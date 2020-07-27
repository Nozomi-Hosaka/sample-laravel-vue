<template>
  <input
    v-model="text"
    type="text"
  >
</template>

<script>
export default {
  name: 'AtomInput',
  props: {
    value: {
      type: String,
      required: true
    }
  },
  computed: {
    text: {
      get() {
        return this.value;
      },
      set(value) {
        this.$emit('input', value);
      }
    }
  }
};
</script>

<style scoped>

</style>
