<template>
<div class="form">
    <h2 class="heading">Information société</h2>
    <p class="support_heading">Ces informations serviront à savoir qui dirige le projet coté client</p>

    <form @submit.prevent="submitForm">
        <div class="espace_form">
            <div class="label"><label for="">Description</label>
            </div>
             <div class="input_error">
            <input type="text" name="description" v-model="form.description"/><br />
<div v-if="errors.description">{{errors.description }}</div>
             </div>
        </div>

                <div class="espace_form">
            <div class="label">
      <label for="">Raison Social</label></div>

      <div class="input_error">
      <input type="text" name="raison_social" v-model="form.raison_social" /> <br />
      <div v-if="errors.raison_social">{{errors.raison_social }}</div>
      </div>
                </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Statut Juridique</label></div>
       <div class="input_error">
      <input type="text" name="statut_juridique" v-model="form.statut_juridique"/> <br />
      <div v-if="errors.statut_juridique">{{errors.statut_juridique }}</div>
       </div>
              </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Capital</label></div>
       <div class="input_error">
      <input type="text" name="capital" v-model="form.capital" /> <br />
      <div v-if="errors.capital">{{errors.capital }}</div>
       </div>
              </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Numéro Siret</label></div>
       <div class="input_error">
      <input type="text" name="numero_siret" v-model="form.numero_siret" /> <br />
      <div v-if="errors.numero_siret">{{errors.numero_siret }}</div>
              </div>
              </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Code Naf (APE)</label></div>
       <div class="input_error">
      <input type="text" name="code_naf" v-model="form.code_naf" /> <br />
      <div v-if="errors.code_naf">{{errors.code_naf }}</div>
              </div>
              </div>

      <h2 class="heading">Adresse</h2>
      <p class="support_heading">Localisation du siège social</p>

        <div class="espace_form">
            <div class="label">
      <label for="">Pays</label></div>
       <div class="input_error">
      <input type="text" name="pays" v-model="form.pays"/> <br />
      <div v-if="errors.pays">{{errors.pays }}</div>
            </div>
        </div>

        <div class="espace_form">
            <div class="label">
      <label for="">Adresse</label></div>
       <div class="input_error">
      <input type="text" name="adresse" v-model="form.adresse" /> <br />
      <div v-if="errors.address">{{errors.address }}</div>
        </div>
        </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Code Postal</label></div>
       <div class="input_error">
      <input type="text" name="code_postal" v-model="form.code_postal"/>
      <br />
      <div v-if="errors.code_postal">{{errors.code_postal }}</div>
              </div>
              </div>

              <div class="espace_form">
            <div class="label">
      <label for="">Ville</label></div>
       <div class="input_error">
      <input type="text" name="ville" v-model="form.ville" /> <br />
      <div v-if="errors.ville">{{errors.ville }}</div>
              </div>
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
     props: ["errors", "client"],
  data() {
    return {
      form: this.$inertia.form({
        description: this.client ? this.client.description :'',
        raison_social: this.client ? this.client.raison_social :'',
        statut_juridique: this.client ? this.client.statut_juridique :'',
        capital: this.client ? this.client.capital :'',
        numero_siret: this.client ? this.client.numero_siret :'',
        code_naf: this.client ? this.client.code_naf :'',
        pays: this.client ? this.client.pays :'',
        adresse: this.client ? this.client.adresse :'',
        code_postal: this.client ? this.client.code_postal :'',
        ville: this.client ? this.client.ville :'',
      }),
    };
  },
  methods: {
    submitForm() {
            if (this.post) {
                this.$inertia.put(this.route('clients.update', this.post.id), this.form);
            } else {
                this.$inertia.post(this.route('clients.store'), this.form);
            }
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

.input_error{
    display: flex;
    flex-flow: column;
}
</style>
