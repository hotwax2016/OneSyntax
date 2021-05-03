<template>
  <div>
    <div class="w-2/3 my-4 mx-auto">
      <button @click="newEmployee = !newEmployee" class="px-2 py-2 bg-blue-500 text-blue-200 font-semibold tracking-wide rounded-md hover:text-blue-100">New Employee</button>
    </div>
    <div v-if="newEmployee" class="w-2/3 mx-auto">
      <div class="px-8 py-4 my-10 bg-white rounded-md border shadow-sm space-y-4">
        <div class="text-2xl mb-10 text-gray-600 text-center">Employee form</div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *First name
          </div>
          <div class="w-2/3">
            <input 
              class="px-2 py-2 border rounded-md w-full text-gray-600" type="text" name="firstname"
              v-model="employee.firstname"
            >
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            Middle name
          </div>
          <div class="w-2/3">
            <input 
              class="px-2 py-2 border rounded-md w-full text-gray-600" type="text" name="middlename"
              v-model="employee.middlename"
            >
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *Last name
          </div>
          <div class="w-2/3">
            <input 
              class="px-2 py-2 border rounded-md w-full text-gray-600" type="text" name="lastname"
              v-model="employee.lastname"
            >
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *Address
          </div>
          <div class="w-2/3">
            <input 
              class="px-2 py-2 border rounded-md w-full text-gray-600" type="text" name="address"
              v-model="employee.address"
            >
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *Department
          </div>
          <div class="w-2/3">
            <select class="w-full px-2 py-2 border rounded-md bg-white text-gray-600" v-model="employee.department_id" >
              <option value="" disabled selected>Choose department</option>
              <option v-for="department in departments" :value="department.id">
                {{ department.name }}
              </option>
            </select>
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *City
          </div>
          <div class="w-2/3">
            <select class="w-full px-2 py-2 border rounded-md bg-white text-gray-600" v-model="employee.city_id" >
              <option value="" disabled selected>Choose city</option>
              <option v-for="city in cities" :value="city.id">
                {{ city.name }}
              </option>
            </select>
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *State
          </div>
          <div class="w-2/3">
            <select class="w-full px-2 py-2 border rounded-md bg-white text-gray-600" v-model="employee.state_id" >
              <option value="" disabled selected>Choose state</option>
              <option v-for="state in states" :value="state.id">
                {{ state.name }}
              </option>
            </select>
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *Country
          </div>
          <div class="w-2/3">
            <select class="w-full px-2 py-2 border rounded-md bg-white text-gray-600" v-model="employee.country_id" >
              <option value="" disabled selected>Choose country</option>
              <option v-for="country in countries" :value="country.id">
                {{ country.name }}
              </option>
            </select>
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *Zip
          </div>
          <div class="w-2/3">
            <input 
              class="px-2 py-2 border rounded-md w-full text-gray-600" type="text" name="firstname"
              v-model="employee.zip"
            >
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *Date of Birth
          </div>
          <div class="w-2/3">
            <input 
              class="px-2 py-2 border rounded-md w-full text-gray-600" type="date" name="firstname"
              v-model="employee.birthdate"
            >
          </div>
        </div>
        <div class="flex items-center">
          <div class="w-1/3 text-gray-500">
            *Date hired
          </div>
          <div class="w-2/3">
            <input 
              class="px-2 py-2 border rounded-md w-full text-gray-600" type="date" name="firstname"
              v-model="employee.date_hired"
            >
          </div>
        </div>
        <div class="pt-5">
          <button
            @click="addEmployee()"
            class="px-2 py-2 bg-blue-500 text-blue-200 rounded-md font-semibold"
          >
            Add employee
          </button>
          <button 
            @click="clearForm()" 
            class="px-2 py-2 bg-red-500 text-red-100 rounded-md font-semibold"
          >
            Close form
          </button>
        </div>
      </div>
    </div>
    <div v-for="employee in dynamicList" :key="employee.id">
      <div class="bg-white w-2/3 mx-auto p-4 rounded-t-md border shadow-sm">
        <div class="flex justify-between items-center">
          <div class="flex w-2/3 text-gray-600 text-lg">
            <div class="flex w-full">
              <div class="w-2/3">
                <div class="w-full text-blue-700">
                  {{ employee.firstname }} {{ employee.middlename ? employee.middlename : ''}} {{ employee.lastname }}
                </div>
                <div>
                  <span class="w-full text-sm">Works in</span> <span class="px-2 py-1 text-blue-600 bg-blue-300 rounded-full">{{employee.department.name}}</span>
                </div>
              </div>
              <div class="w-1/3">
                <div v-if="employee.deleted_at" class="px-3 py-1 text-red-600 rounded-full">
                  deleted
                </div>
                <div v-else class="px-3 py-1 text-green-600 rounded-full">
                  active
                </div>
              </div>
            </div>
          </div>
          <div>
            <button class="px-3 py-2 text-blue-600 rounded-lg" @click="toggleProfile(employee)">More</button>
            <button class="px-3 py-2 bg-green-500 text-green-200 font-semibold rounded-lg">Edit</button>
            <button
              @click.prevent="deleteEmployee(employee.id)" 
              class="px-3 py-2 bg-red-500 text-red-200 font-semibold rounded-lg"
            >
              Delete
            </button>
          </div>
        </div>
      </div>
      <div v-if="employee.visible">
        <div class="w-2/3 m-2 p-4 bg-white rounded-b-md shadow-md mx-auto space-y-4">
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Firstname</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.firstname }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Middlename</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.middlename }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Lastname</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.lastname }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Department</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.department ? employee.department.name : '[DELETED]' }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">City</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.city ? employee.city.name : '[DELETED]' }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">State</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.state ? employee.state.name : '[DELETED]' }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Country</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.country ? employee.country.name : '[DELETED]' }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Zip</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.zip }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Birthday</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.birthday }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Date hired</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.date_hired }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Created At</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.created_at }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Updated At</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.updated_at }}</div>
          </div>
          <div class="flex">
            <div class="w-1/3 text-gray-500 text-lg">Deleted At</div>
            <div class="w-2/3 text-gray-500 text-lg">{{ employee.deleted_at }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      employees: [],
      departments: [],
      countries: [],
      states: [],
      cities: [],
      dynamicList: [],
      newEmployee: false,
      employee: {
        firstname: '',
        middlename: '',
        lastname: '',
        address: '',
        department_id: '',
        city_id: '',
        state_id: '',
        country_id: '',
        zip: '',
        birthdate: '',
        date_hired: '',
      },
    }
  },
  methods: {
    getEmployees() {
      axios.get('/api/employees')
        .then(res => {
          this.employees = res.data
          this.dynamicList = []
          this.employees.forEach(element => {
            this.dynamicList.push({...element, 'visible': false})
          });
        })
        .catch(e => {
          console.log('error', e)
        })
    },
    getDepartments() {
      axios.get('/api/departments')
        .then(res => {
          this.departments = res.data
        })
        .catch(e => {
          console.log(e)
        })
    },
    getCountries() {
      axios.get('/api/countries')
        .then(res => {
          this.countries = res.data
        })
        .catch(e => {
          console.log(e)
        })
    },
    getStates() {
      axios.get('/api/states')
        .then(res => {
          this.states = res.data
        })
        .catch(e => {
          console.log(e)
        })
    },
    getCities() {
      axios.get('/api/cities')
        .then(res => {
          this.cities = res.data
        })
        .catch(e => {
          console.log(e)
        })
    },
    toggleProfile(res) {
      res.visible = !res.visible
    },
    clearForm() {
      this.clearEmployee()
      this.newEmployee = false
    },
    clearEmployee() {
      this.employee = {
        firstname: '',
        middlename: '',
        lastname: '',
        address: '',
        department_id: '',
        city_id: '',
        state_id: '',
        country_id: '',
        zip: '',
        birthdate: '',
        date_hired: '',
      }
    },
    addEmployee() {
      axios.post('/api/employees', this.employee)
        .then(res => {
          console.log(res)
          this.clearEmployee()
          this.getEmployees()
        })
        .catch(e => {
          console.log(e)
        })
    },
    deleteEmployee(id) {
      axios.delete('/api/employees/' + id)
        .then(res => {
          console.log(res)
          this.getEmployees()
        })
        .catch(e => {
          console.log(e)
        })
    }
  },
  mounted() {
    this.getEmployees()
    this.getDepartments()
    this.getCountries()
    this.getStates()
    this.getCities()
  }
}
</script>

<style>

</style>