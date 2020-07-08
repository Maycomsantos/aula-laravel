<template>
  <form @submit.prevent="submit">
    <div class="form-group">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="name" id="name" v-model="fields.name" />
      <div v-if="errors && errors.name" class="text-danger">{{ errors.name[0] }}</div>
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="text" class="form-control" name="email" id="email" v-model="fields.email" />
      <div v-if="errors && errors.email" class="text-danger">{{ errors.email[0] }}</div>
    </div>

    <div class="form-group">
      <label for="message">Mensagem</label>
      <input type="text" class="form-control" name="message" id="message" v-model="fields.message" />
      <div v-if="errors && errors.message" class="text-danger">{{ errors.message[0] }}</div>
    </div>

    <button type="submit" class="btn btn-primary">Enviar mensagem</button>

    <div v-if="sucess" class="alert alert-sucess mt-3">Mensagem enviada</div>
  </form>
</template>

<script>
export default {
    data() {
        return {
            fields: {},
            errors: {},
            sucess: false,
            loaded: true,
        }
    },
    methods: {
        submit() {
            if(this.loaded) {
                this.loaded = false;
                this.sucess = false;
                this.errors = {};
                axios.post('/submit' , this.fields).then(response => {
                    this.fields = {};
                    this.loaded = true;
                    this.sucess = true;
                }).catch(error => {
                    this.loaded = true;
                    if(error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
            }
        }
    }
};
</script>

