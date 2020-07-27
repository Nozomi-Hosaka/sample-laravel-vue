<template>
  <div>
    <atom-input v-model="text" />
    Input text is {{ text }}
  </div>
</template>

<script>
import AtomInput from '../atoms/AtomInput';

export default {
  name: 'DisplayInput',
  components: {AtomInput},
  data() {
    return {
      text: '',
    };
  }
};
</script>

<style scoped>

</style>
