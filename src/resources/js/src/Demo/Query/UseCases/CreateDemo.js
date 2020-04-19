class CreateDemo {
    constructor(demoRepository) {
        this._demoRepository = demoRepository;
    }

    async process(name) {
        return await this._demoRepository.create(name);
    }
}

export default CreateDemo;
