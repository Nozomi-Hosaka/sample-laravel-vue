class UpdateDemo {
    constructor(demoRepository) {
        this._demoRepository = demoRepository;
    }

    async process() {
        return await this._demoRepository.findAll();
    }
}

export default UpdateDemo;
