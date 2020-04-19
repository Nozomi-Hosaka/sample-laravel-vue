<template>
    <div>
        <display-input></display-input>

        <div>
            <atom-input v-model="name"></atom-input>
            <atom-button @click="createDemo">登録</atom-button>
        </div>

        <spinner v-if="loading"></spinner>
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
                    <td>[ {{ demo.name }} ]</td>
                    <td>[ {{ demo.status }} ]</td>
                    <td>
                        <atom-button success @click="updateDemo">更新</atom-button>
                        <atom-button danger @click="deleteDemo">削除</atom-button>
                    </td>
                </tr>
            </table>
        </template>
    </div>
</template>

<script>
    import GetDemo from "../../src/Demo/Query/UseCases/GetDemo";
    import DemoRepository from "../../src/Repositories/DemoRepository";
    import Spinner from "../../components/atoms/Spinner";
    import AtomInput from "../../components/atoms/AtomInput";
    import AtomButton from "../../components/atoms/AtomButton";
    import CreateDemo from "../../src/Demo/Query/UseCases/CreateDemo";

    export default {
        name: "Index",
        components: {AtomButton, AtomInput, Spinner},
        data() {
            return {
                loading: false,
                getDemoUseCase: new GetDemo(new DemoRepository()),
                createDemoUseCase: new CreateDemo(new DemoRepository()),
                updateDemoUseCase: new GetDemo(new DemoRepository()),
                deleteDemoUseCase: new GetDemo(new DemoRepository()),
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
            async updateDemo() {
                console.log('updateDemo');
            },
            async deleteDemo() {
                console.log('deleteDemo');
            },
        }
    }
</script>

<style scoped>

</style>
