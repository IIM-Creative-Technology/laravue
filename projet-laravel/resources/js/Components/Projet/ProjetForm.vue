<template>
<div class="form">
  <h2 class="heading">Responsable projet</h2>
  <p class="support_heading">Ces informations serviront à savoir qui dirige le projet coté client</p>

  <form @submit.prevent="submitForm">
        <div class="espace_form">
            <label for="">Client</label>
            <input type="text" name="client" v-model="form.client" /><br />
            <div v-if="errors.client">{{errors.client }}</div>
        </div>
        <div class="espace_form">
            <label for="">Nom</label>
            <input type="text" name="name_responsable" v-model="form.name_responsable"/><br />
            <div v-if="errors.name_responsable">{{errors.name_responsable }}</div>
        </div>

        <div class="espace_form">
            <label for="">Prénom</label>
            <input type="text" name="prenom_responsable" v-model="form.prenom_responsable"/><br />
            <div v-if="errors.prenom_responsable">{{errors.prenom_responsable}}</div>
        </div>

        <div class="espace_form">
            <label for="">Téléphone</label>
            <input
            type="tel"
            name="tel_responsable"
            v-model="form.tel_responsable"
            placeholder="+33 (0) 660 72 55 02"
            /><br />
            <div v-if="errors.tel_responsable">
            {{errors.tel_responsable }}
            </div>
        </div>

        <div class="espace_form">
            <label for="">Email</label>
            <input
            type="email"
            name="email_responsable"
            v-model="form.email_responsable"
            placeholder="you@example.com"
            /><br />
            <div v-if="errors.email_responsable">
            {{errors.email_responsable }}
            </div>
        </div>

    <h2 class="heading snd">
      Information projet
    </h2>
    <p class="support_heading">Use a permanent address when you can receive mail</p>
        <div class="espace_form">
            <label for="">Titre</label>
            <input type="text" name="title" v-model="form.title" /><br />
            <div v-if="errors.title">{{ errors.title }}</div>
        </div>

        <div class="espace_form">
            <label for="">Description</label
            ><textarea type="text" name="description" cols="30" rows="3" v-model="form.description"/><br />
            <div v-if="errors.description">{{ errors.description }}</div>
        </div>

        <div class="espace_form">
            <label for="">Début de projet</label
            ><input type="date" name="date_debut" v-model="form.date_debut" /><br />
            <div v-if="errors.date_debut">{{ errors.date_debut }}</div>
        </div>

        <div class="espace_form">
            <label for="">Fin de projet estimé</label
            ><input type="date" name="date_fin" v-model="form.date_fin" /><br />
            <div v-if="errors.date_fin">{{ errors.date_fin }}</div>
        </div>

        <div class="espace_form">
            <label for="">Status du projet</label
            ><input type="text" name="etat" v-model="form.etat" /><br />
            <div v-if="errors.etat">{{ errors.etat }}</div>
        </div>

        <div class="espace_form">
            <label for="">Nombre de jours vendus </label
            ><input
            type="text"
            name="nombre_jours_vendus"
            placeholder="25"
            v-model="form.nombre_jours_vendus"
            /><br />
            <div v-if="errors.nombre_jours_vendus">
            {{errors.nombre_jours_vendus }}
            </div>
        </div>

    <button class="buttonn annuler" type="submit">Annuler</button>
    <button class="buttonn sauvegarder" type="submit">Sauvegarder</button>
  </form>
  </div>
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
}

.espace_form label{
    width: 200px;
    margin-right: 45px;
}

.espace_form input, .espace_form textarea{
    width: 200px;
    border: 1px solid #E5E7EB;
    border-radius: 5px;
}

.espace_form input, .espace_form textarea{
    width: 200px;
    border: 1px solid #E5E7EB;
    border-radius: 5px;
}

</style>

