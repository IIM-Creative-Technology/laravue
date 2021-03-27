<template>
  <div>
    <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
      <!-- <div>
                <jet-application-logo class="block h-12 w-auto" />
            </div> -->
      <div id="separate-border">
        <div class="mt-8 text-2xl">Statistiques</div>

        <div id="space_card">
          <div class="card">
            <div class="img-text">
              <div class="back-stat">
                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M10 2.35418C10.7329 1.52375 11.8053 1 13 1C15.2091 1 17 2.79086 17 5C17 7.20914 15.2091 9 13 9C11.8053 9 10.7329 8.47624 10 7.64582M13 19H1V18C1 14.6863 3.68629 12 7 12C10.3137 12 13 14.6863 13 18V19ZM13 19H19V18C19 14.6863 16.3137 12 13 12C11.9071 12 10.8825 12.2922 10 12.8027M11 5C11 7.20914 9.20914 9 7 9C4.79086 9 3 7.20914 3 5C3 2.79086 4.79086 1 7 1C9.20914 1 11 2.79086 11 5Z"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="cote">
                <p>Nombre de clients</p>
                <div class="number">
                  <p class="total">125</p>
                  <p class="evolution green">12</p>
                </div>
              </div>
            </div>

            <div class="lien">
            <a href="">Voir tous les clients</a>
            </div>

          </div>

          <div class="card">
              <div class="img-text">
            <div class="back-stat">

                <svg
                  width="20"
                  height="20"
                  viewBox="0 0 20 20"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M13.9998 14L11.9998 19L7.99983 8L18.9998 12L13.9998 14ZM13.9998 14L18.9998 19M6.18806 1.23853L6.96452 4.1363M4.13606 6.96472L1.23828 6.18826M12.9495 3.05029L10.8282 5.17161M5.17146 10.8284L3.05014 12.9497"
                    stroke="white"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                </svg>
              </div>
              <div class="cote">
                <p>Nombre de clients</p>

                <div class="number">
                  <p class="total">14</p>
                  <p class="evolution red">3.2%</p>
                </div>
              </div>
            </div>

            <div class="lien">
                <a href="">Voir tous les projets</a>
            </div>

          </div>
        </div>
      </div>

      <!-- <div class="mt-6 text-gray-500">
                Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
                to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
                you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
                ecosystem to be a breath of fresh air. We hope you love it.
            </div> -->
    </div>

  </div>
</template>

<script>
import JetApplicationLogo from "@/Jetstream/ApplicationLogo";

export default {
  components: {
    JetApplicationLogo,
  },
  props: ["projets"],
};
</script>

<style>
#space_card {
  display: flex;
  justify-content: space-between;
  margin-top: 15px;
}

.card {
  background-color: rgb(255, 255, 255);
  width: 510px;
  border-radius: 5px;
  box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 1px 2px rgba(0, 0, 0, 0.06);
}
.back-stat {
  background-color: #6366f1;
  border-radius: 5px;
  width: 50px;
  height: 50px;
  /* text-align: center;
    justify-content: center; */
}

svg {
  display: block;
  margin: auto auto;
  /* padding-top: 2px; */
  /* text-align: center;
    justify-content: center; */
}

.number {
  display: flex;
}

.total {
  font-weight: bold;
  font-size: 20px;
  margin-right: 15px;
}

.cote{
    margin-left: 20px;
}

.img-text {
  display: flex;
  padding: 16px;
}

.card a{
    color: #6366f1;
    padding: 16px;
    margin-top:20px ;
}

#separate-border{
    border: 4px dashed #F3F4F6;
    border-radius: 15px;
    width: 100%;
    padding: 0 1.5rem 1.5rem;
}

.p-6{
    padding-left: 1.5rem;
    padding-right: 1.5rem;
}

.green{
    color: #059669;
}

.red{
    color: #DC2626;
}

.lien{
    background-color: #F9FAFB;
    border-radius: 0 0 5px 5px;
    margin-top: 10px;
    height: 40px;
}
</style>
