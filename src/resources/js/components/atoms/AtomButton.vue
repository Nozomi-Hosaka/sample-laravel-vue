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
  data() {
    return {
      class: {
        'btn': true,
        'btn-primary': false,
        'btn-secondary': false,
        'btn-success': false,
        'btn-danger': false,
        'btn-warning': false,
        'btn-info': false,
        'btn-light': false,
        'btn-dark': false,
        'btn-link': false,
      }
    };
  },
  computed: {
    btnClass() {
      this.class['btn-primary'] = this.primary;
      this.class['btn-secondary'] = this.secondary;
      this.class['btn-success'] = this.success;
      this.class['btn-danger'] = this.danger;
      this.class['btn-warning'] = this.warning;
      this.class['btn-info'] = this.info;
      this.class['btn-light'] = this.light;
      this.class['btn-dark'] = this.dark;
      this.class['btn-link'] = this.link;
      return this.class;
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
