<template>
  <h1>Responsable projet</h1>
  <p>Ces informations serviront à savoir qui dirige le projet coté client</p>

   <form>
    <input type="text" id="client" v-model="form.client" />
    <input
      type="text"
      name="name_responsable"
      v-model="form.name_responsable"
    />
    <br />
    <input
      type="text"
      name="prenom_responsable"
      v-model="form.prenom_responsable"
    /><br />
    <input
      type="tel"
      name="tel_responsable"
      v-model="form.tel_responsable"
    /><br />
    <input
      type="email"
      name="email_responsable"
      v-model="form.email_responsable"
    /><br />
  </form>
   <h2>
    Information projet
    <p>Use a permanent address when you can receive mail</p>
  </h2>
  <form>
    <input type="texte" name="title" v-model="form.title" /><br>
    <input type="texte" name="description" v-model="form.description" /><br>
    <input type="date" name="date_debut" v-model="form.date_debut" /><br>
    <input type="date" name="date_fin" v-model="form.date_fin" /><br>
    <input type="texte" name="etat" v-model="form.etat" /><br>
    <input type="texte" name="nombre_jours_vendus" v-model="form.nombre_jours_vendus"/><br>
    <button type="submit">Annuler</button>
    <button type="submit">Sauvegarder</button>
  </form> -->
</template>

<script>
export default {
  data() {
      form: this.$inertia.form({
         client:"",
         name_responsable:"",
         prénom_responsable:"",
         tel_responsable:"",
         email_responsable: "",
         title: "",
         description:"",
         date_debut:"",
         date_fin:"",
         etat:"",
         nombre_jours_vendus:"",
      })
  }
};
</script>

