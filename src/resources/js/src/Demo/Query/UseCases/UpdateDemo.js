class UpdateDemo {
    constructor(demoRepository) {
        this._demoRepository = demoRepository;
    }

    async process(demo) {
        return await this._demoRepository.update(demo.id, demo.name);
    }
}

export default UpdateDemo;
