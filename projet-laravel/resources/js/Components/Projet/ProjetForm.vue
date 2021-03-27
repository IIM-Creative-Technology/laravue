<template>
  <h1>Responsable projet</h1>
  <p>Ces informations serviront à savoir qui dirige le projet coté client</p>

  <form @submit.prevent="submitForm">
    <label for="">Client</label>
    <input type="text" name="client" v-model="form.client" /><br />
     <div v-if="errors.client">{{errors.client }}</div>
    <label for="">Nom</label>
    <input type="text" name="name_responsable" v-model="form.name_responsable"/><br />
    <div v-if="errors.name_responsable">{{errors.name_responsable }}</div>
    <label for="">Prénom</label>
    <input type="text" name="prenom_responsable" v-model="form.prenom_responsable"/><br />
    <div v-if="errors.prenom_responsable">{{errors.prenom_responsable}}</div>
    <label for="">Téléphone</label>
    <input
      type="tel"
      name="tel_responsable"
      v-model="form.tel_responsable"
    /><br />
    <div v-if="errors.tel_responsable">
      {{errors.tel_responsable }}
    </div>
    <label for="">Email</label>
    <input
      type="email"
      name="email_responsable"
      v-model="form.email_responsable"
    /><br />
    <div v-if="errors.email_responsable">
      {{errors.email_responsable }}
    </div>

    <h2>
      Information projet
      <p>Use a permanent address when you can receive mail</p>
    </h2>

    <label for="">Titre</label>
    <input type="text" name="title" v-model="form.title" /><br />
    <div v-if="errors.title">{{ errors.title }}</div>
    <label for="">Description</label
    ><input type="text" name="description" v-model="form.description" /><br />
    <div v-if="errors.description">{{ errors.description }}</div>
    <label for="">Début de projet</label
    ><input type="date" name="date_debut" v-model="form.date_debut" /><br />
    <div v-if="errors.date_debut">{{ errors.date_debut }}</div>
    <label for="">Fin de projet estimé</label
    ><input type="date" name="date_fin" v-model="form.date_fin" /><br />
    <div v-if="errors.date_fin">{{ errors.date_fin }}</div>
    <label for="">Status du projet</label
    ><input type="text" name="etat" v-model="form.etat" /><br />
    <div v-if="errors.etat">{{ errors.etat }}</div>
    <label for="">Nombre de jours vendus </label
    ><input
      type="text"
      name="nombre_jours_vendus"
      v-model="form.nombre_jours_vendus"
    /><br />
    <div v-if="errors.nombre_jours_vendus">
      {{errors.nombre_jours_vendus }}
    </div>
    <button type="submit">Annuler</button>
    <button type="submit">Sauvegarder</button>
  </form>
</template>

<script>
export default {
   props: ["errors"],

  data() {
    return {
      form: this.$inertia.form({
        client: "",
        name_responsable: "",
        prénom_responsable: "",
        tel_responsable: "",
        email_responsable: "",
        title: "",
        description: "",
        date_debut: "",
        date_fin: "",
        etat: "",
        nombre_jours_vendus: "",
      }),
    };
  },
  methods: {
    submitForm() {
      this.$inertia.post(this.route("projets.store"), this.form);
    },
  },
};
</script>

