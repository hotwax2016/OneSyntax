import axios from "axios"

let actions = {

  fetch_employees({commit}) {
    axios.get('/api/employees')
      .then(res => {
        commit('FETCH_EMPLOYEES', res.data)
      })
      .catch( e => {
        console.log('[error] fetch_employees', e)
      })
  }
}

export default actions