<template>

    <h1>Information société</h1>
    <p>Ces informations serviront à savoir qui dirige le projet coté client</p>
    <form @submit.prevent="submitForm">
      <label for="">Description</label><input type="text" name="description" v-model="form.description"/><br />
<div v-if="errors.description">{{errors.description }}</div>
      <label for="">Raison Social</label>
      <input type="text" name="raison_social" v-model="raison_social" /> <br />
      <div v-if="errors.raison_social">{{errors.raison_social }}</div>
      <label for="">Statut Juridique</label
      ><input type="text" name="statut_juridique" v-model="statut_juridique"/> <br />
      <div v-if="errors.statut_juridique">{{errors.statut_juridique }}</div>
      <label for="">Capital</label><input type="text" name="capital" v-model="capital" /> <br />
      <div v-if="errors.capital">{{errors.capital }}</div>
      <label for="">Numéro Siret</label>
      <input type="text" name="numero_siret" v-model="numero_siret" /> <br />
      <div v-if="errors.numero_siret">{{errors.numero_siret }}</div>
      <label for="">Code Naf (APE)</label>
      <input type="text" name="code_naf" v-model="code_naf" /> <br />
      <div v-if="errors.code_naf">{{errors.code_naf }}</div>

      <h2>Adresse</h2>
      <p>Localisation du siège ocial</p>

      <label for="">Pays</label> <input type="text" name="pays" v-model="pays"/> <br />
      <div v-if="errors.pays">{{errors.pays }}</div>

      <label for="">Adresse</label><input type="text" name="adresse" v-model="adresse" /> <br />
      <div v-if="errors.address">{{errors.address }}</div>
      <label for="">Code Postal</label><input type="text" name="code_postal" v-model="code_postal"/>
      <br />
      <div v-if="errors.code_postal">{{errors.code_postal }}</div>
      <label for="">Ville</label> <input type="text" name="ville" v-model="ville" /> <br />
      <div v-if="errors.ville">{{errors.ville }}</div>
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
        description: "",
        raison_social: "",
        statut_juridique: "",
        capital: "",
        numero_siret: "",
        code_naf: "",
        pays: "",
        adresse: "",
        code_postal: "",
        ville: "",
      }),
    };
  },
  methods: {
    submitForm() {
      this.$inertia.post(this.route("clients.store"), this.form);
    },
  },
};
</script>
