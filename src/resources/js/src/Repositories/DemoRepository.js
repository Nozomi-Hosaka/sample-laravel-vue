import Api from '../Api';

class DemoRepository extends Api {
  async findAll() {
    const params = new URLSearchParams();

    const res = await this._api.send('get', '/api/demo', params);

    if (!this.checkErrorByResponseStatus(res)) {
      return false;
    }

    return res.data;
  }

  async create(name) {
    const params = new FormData();
    params.append('name', name);

    const res = await this._api.send('post', '/api/demo', params);

    if (!this.checkErrorByResponseStatus(res)) {
      return false;
    }

    return res.data;
  }

  async update(id, name) {
    const params = new FormData();
    params.append('name', name);

    const res = await this._api.send('put', '/api/demo/' + id, params);

    if (!this.checkErrorByResponseStatus(res)) {
      return false;
    }

    return res.data;
  }

  async delete(id) {
    const res = await this._api.send('delete', '/api/demo/' + id);

    if (!this.checkErrorByResponseStatus(res)) {
      return false;
    }

    return res.data;
  }
}

export default DemoRepository;
