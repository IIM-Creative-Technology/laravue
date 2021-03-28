<template>
<div class="form">
    <h2 class="heading">Information société</h2>
    <p class="support_heading">Ces informations serviront à savoir qui dirige le projet coté client</p>

    <form @submit.prevent="submitForm">
        <div class="espace_form">
            <div class="label"><label for="">Description</label>
            </div>
            <input type="text" name="description" v-model="form.description"/><br />
<div v-if="errors.description">{{errors.description }}</div>
        </div>

                <div class="espace_form">
            <div class="label">
      <label for="">Raison Social</label></div>
      <input type="text" name="raison_social" v-model="raison_social" /> <br />
      <div v-if="errors.raison_social">{{errors.raison_social }}</div>
                </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Statut Juridique</label></div>
      <input type="text" name="statut_juridique" v-model="statut_juridique"/> <br />
      <div v-if="errors.statut_juridique">{{errors.statut_juridique }}</div>
              </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Capital</label></div>
      <input type="text" name="capital" v-model="capital" /> <br />
      <div v-if="errors.capital">{{errors.capital }}</div>
              </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Numéro Siret</label></div>
      <input type="text" name="numero_siret" v-model="numero_siret" /> <br />
      <div v-if="errors.numero_siret">{{errors.numero_siret }}</div>
              </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Code Naf (APE)</label></div>
      <input type="text" name="code_naf" v-model="code_naf" /> <br />
      <div v-if="errors.code_naf">{{errors.code_naf }}</div>
              </div>

      <h2 class="heading">Adresse</h2>
      <p class="support_heading">Localisation du siège social</p>

        <div class="espace_form">
            <div class="label">
      <label for="">Pays</label></div>
      <input type="text" name="pays" v-model="pays"/> <br />
      <div v-if="errors.pays">{{errors.pays }}</div>
            </div>

        <div class="espace_form">
            <div class="label">
      <label for="">Adresse</label></div>
      <input type="text" name="adresse" v-model="adresse" /> <br />
      <div v-if="errors.address">{{errors.address }}</div>
        </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Code Postal</label></div>
      <input type="text" name="code_postal" v-model="code_postal"/>
      <br />
      <div v-if="errors.code_postal">{{errors.code_postal }}</div>
              </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Ville</label></div>
      <input type="text" name="ville" v-model="ville" /> <br />
      <div v-if="errors.ville">{{errors.ville }}</div>
              </div>

      <div class="end_button">
      <button class="buttonn annuler" type="submit">Annuler</button>
      <button class="buttonn sauvegarder" type="submit">Sauvegarder</button>
      </div>

  </form>
</div>
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


<style>
.heading{
    font-size: 18px;
    margin: 10px 0;
}

.snd{
    margin-top: 30px;
}

.support_heading{
    color: #6B7280;
    font-size: 14px;
    margin-bottom: 30px;
}

.form{
    padding: 20px;
}

.buttonn{
    border-radius: 5px;
    height: 40px;
    padding: 0 10px;
}

.annuler{
    border: 1px solid gray;
}

.sauvegarder{
    background-color: #6366f1;
    color: white;
}

.espace_form{
    padding: 15px 0;
    border-top: 1px solid #E5E7EB;
    display: flex;
}

.label{
    width: 350px;
    /* margin-right: 45px;*/
}

.espace_form input, .espace_form textarea{
    width: 600px;
    border: 1px solid #E5E7EB;
    border-radius: 5px;
}

.end_button{
    text-align: end;
    width: 100%;
}
.end_button button:first-child{
    margin-right: 10px ;
}
</style>
