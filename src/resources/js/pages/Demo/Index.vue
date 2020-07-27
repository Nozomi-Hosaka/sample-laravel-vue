<template>
  <div>
    <display-input />

    <div>
      <atom-input v-model="name" />
      <atom-button @click="createDemo">
        登録
      </atom-button>
    </div>

    <spinner v-if="loading" />
    <template v-else>
      <table>
        <tr>
          <td>id</td>
          <td>name</td>
          <td>status</td>
          <td>operation</td>
        </tr>
        <tr
          v-for="(demo, index) in demos"
          :key="index"
        >
          <td>[ {{ demo.id }} ]</td>
          <td>
            <label>
              <input
                v-model="demo.name"
                type="text"
              >
            </label>
          </td>
          <td>[ {{ demo.status === 1 ? '有効' : '無効' }} ]</td>
          <td>
            <atom-button
              success
              @click="updateDemo(demo)"
            >
              更新
            </atom-button>
            <atom-button
              danger
              @click="deleteDemo(demo)"
            >
              削除
            </atom-button>
          </td>
        </tr>
      </table>
    </template>
  </div>
</template>

<script>
import GetDemo from '../../src/Demo/Query/UseCases/GetDemo';
import DemoRepository from '../../src/Repositories/DemoRepository';
import Spinner from '../../components/atoms/Spinner';
import AtomInput from '../../components/atoms/AtomInput';
import AtomButton from '../../components/atoms/AtomButton';
import CreateDemo from '../../src/Demo/Query/UseCases/CreateDemo';
import UpdateDemo from '../../src/Demo/Query/UseCases/UpdateDemo';
import DeleteDemo from '../../src/Demo/Query/UseCases/DeleteDemo';

export default {
  name: 'Index',
  components: {AtomButton, AtomInput, Spinner},
  data() {
    return {
      loading: false,
      getDemoUseCase: new GetDemo(new DemoRepository()),
      createDemoUseCase: new CreateDemo(new DemoRepository()),
      updateDemoUseCase: new UpdateDemo(new DemoRepository()),
      deleteDemoUseCase: new DeleteDemo(new DemoRepository()),
      demos: [],
      name: '',
    };
  },
  async created() {
    await Promise.all([this.getDemo()]);
  },
  methods: {
    async getDemo() {
      this.loading = true;
      this.demos = await this.getDemoUseCase.process();
      this.loading = false;
    },
    async createDemo() {
      this.loading = true;
      await this.createDemoUseCase.process(this.name);
      this.loading = false;
    },
    async updateDemo(demo) {
      this.loading = true;
      await this.updateDemoUseCase.process(demo);
      this.loading = false;
    },
    async deleteDemo(demo) {
      this.loading = true;
      await this.deleteDemoUseCase.process(demo);
      this.loading = false;
    },
  }
};
</script>

<style scoped>

</style>
