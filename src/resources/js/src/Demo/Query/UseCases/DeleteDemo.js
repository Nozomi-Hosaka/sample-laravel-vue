class DeleteDemo {
  constructor(demoRepository) {
    this._demoRepository = demoRepository;
  }

  async process(demo) {
    return await this._demoRepository.delete(demo.id);
  }
}

export default DeleteDemo;
