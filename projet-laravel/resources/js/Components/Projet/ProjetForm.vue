<template>
<div class="form">
  <h2 class="heading">Responsable projet</h2>
  <p class="support_heading">Ces informations serviront à savoir qui dirige le projet coté client</p>

  <form @submit.prevent="submitForm">
        <div class="espace_form">
            <div class="label"><label for="">Client</label></div>
             <div class="input_error">
            <input type="text" name="client" v-model="form.client" /><br />
            <div v-if="errors.client">{{errors.client }}</div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="name_responsable" value="name_responsable">Nom</label></div>
             <div class="input_error">
            <input type="text" id="name_responsable" name="name_responsable" v-model="form.name_responsable"/><br />
            <div v-if="errors.name_responsable">{{errors.name_responsable }}</div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="prenom_responsable" value="prenom_responsable">Prénom</label></div>
             <div class="input_error">
            <input type="text" id="prenom_responsable" name="prenom_responsable" v-model="form.prenom_responsable"/><br />
            <div v-if="errors.prenom_responsable">{{errors.prenom_responsable}}</div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="tel_responsable" value="tel_responsable">Téléphone</label></div>
             <div class="input_error">
            <input
            type="tel"
            id="tel_responsable"
            name="tel_responsable"
            v-model="form.tel_responsable"
            placeholder="+33 (0) 660 72 55 02"
            /><br />
            <div v-if="errors.tel_responsable">
            {{errors.tel_responsable }}
            </div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="email_responsable" value="email_responsable">Email</label></div>
            <div class="input_error">
            <input
            type="email"
            id="email_responsable"
            name="email_responsable"
            v-model="form.email_responsable"
            placeholder="you@example.com"
            /><br />
            <div v-if="errors.email_responsable">
            {{errors.email_responsable }}
            </div>
            </div>
        </div>

    <h2 class="heading snd">
      Information projet
    </h2>
    <p class="support_heading">Use a permanent address when you can receive mail</p>
        <div class="espace_form">
            <div class="label"><label for="title" value="title">Titre</label></div>
             <div class="input_error">
            <input type="text" id="title" name="title" v-model="form.title" /><br />
            <div v-if="errors.title">{{ errors.title }}</div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="description" value="description">Description</label
            ></div>
             <div class="input_error">
            <textarea type="text" id="description" name="description" cols="30" rows="3" v-model="form.description"/><br />
            <div v-if="errors.description">{{ errors.description }}</div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="date_debut" value="date_debut">Début de projet</label
            ></div>
             <div class="input_error">
            <input type="date" id="date_debut" name="date_debut" v-model="form.date_debut" /><br />
            <div v-if="errors.date_debut">{{ errors.date_debut }}</div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="date_fin" value="date_fin">Fin de projet estimé</label
            ></div>
             <div class="input_error">
                 <input type="date" id="date_fin" name="date_fin" v-model="form.date_fin" /><br />
            <div v-if="errors.date_fin">{{ errors.date_fin }}</div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="etat" value="etat">Status du projet</label
            ></div>
             <div class="input_error">
                 <input type="text" id="etat" name="etat" v-model="form.etat" /><br />
            <div v-if="errors.etat">{{ errors.etat }}</div>
             </div>
        </div>

        <div class="espace_form">
            <div class="label"><label for="nombre_jours_vendus" value="nombre_jours_vendus">Nombre de jours vendus </label
            ></div>
             <div class="input_error">
            <input
            type="text"
            id="nombre_jours_vendus"
            name="nombre_jours_vendus"
            placeholder="25"
            v-model="form.nombre_jours_vendus"
            /><br />
            <div v-if="errors.nombre_jours_vendus">
            {{errors.nombre_jours_vendus }}
            </div>
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
   props: ["errors", "projet"],

  data() {
    return {
      form: this.$inertia.form({
        client: this.projet ? this.projet.client :'',
        name_responsable: this.projet ? this.projet.name_responsable :'',
        prenom_responsable:this.projet ? this.projet.prenom_responsable :'',
        tel_responsable:this.projet ? this.projet.tel_responsable :'',
        email_responsable:this.projet ? this.projet.email_responsable :'',
        title:this.projet ? this.projet.title :'',
        description:this.projet ? this.projet.description :'',
        date_debut:this.projet ? this.projet.date_debut :'',
        date_fin:this.projet ? this.projet.date_fin :'',
        etat:this.projet ? this.projet.etat :'',
        nombre_jours_vendus:this.projet ? this.projet.nombre_jours_vendus :'',
      }),
    };
  },
  methods: {
    submitForm() {
            if (this.post) {
                this.$inertia.put(this.route('projets.update', this.post.id), this.form);
            } else {
                this.$inertia.post(this.route('projets.store'), this.form);
            }
    }
  }
}
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

