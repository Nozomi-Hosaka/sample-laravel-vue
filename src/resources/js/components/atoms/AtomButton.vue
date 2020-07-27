<template>
  <button
    :class="btnClass"
    @click="click"
  >
    <slot />
  </button>
</template>

<script>
export default {
  name: 'AtomButton',
  props: {
    primary: {
      type: Boolean,
      default: true,
    },
    secondary: {
      type: Boolean,
      default: false,
    },
    success: {
      type: Boolean,
      default: false,
    },
    danger: {
      type: Boolean,
      default: false,
    },
    warning: {
      type: Boolean,
      default: false,
    },
    info: {
      type: Boolean,
      default: false,
    },
    light: {
      type: Boolean,
      default: false,
    },
    dark: {
      type: Boolean,
      default: false,
    },
    link: {
      type: Boolean,
      default: false,
    },
  },
  computed: {
    btnClass() {
      return {
        'btn': true,
        'btn-primary': this.primary,
        'btn-secondary': this.secondary,
        'btn-success': this.success,
        'btn-danger': this.danger,
        'btn-warning': this.warning,
        'btn-info': this.info,
        'btn-light': this.light,
        'btn-dark': this.dark,
        'btn-link': this.link,
      };
    },
  },
  methods: {
    click() {
      this.$emit('click');
    }
  }
};
</script>

<style scoped>

</style>
