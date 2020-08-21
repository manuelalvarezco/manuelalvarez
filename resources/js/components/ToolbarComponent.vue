<template>
    <v-app>

    <v-app-bar
      color="indigo"
      dark
      :elevation="1"
      class="navbar"
    >
      <v-app-bar-nav-icon id="navbar-mobile" @click="drawer = true"></v-app-bar-nav-icon>
        <v-spacer id="navbar-spacer__mobile"></v-spacer>
      <v-toolbar-title>Manuel Álvarez</v-toolbar-title>
        <v-spacer></v-spacer>
      <div class="navbar-web__options">
        <v-btn text >Home</v-btn>
        <v-btn text >About</v-btn>
        <v-btn text >Contact</v-btn>
        <v-btn text >Blog</v-btn>
      </div>

      <v-spacer></v-spacer>
    <div class="navbar-web__options">

      <v-btn text color="white--text">Login</v-btn>
        </div>
    </v-app-bar>

    <v-navigation-drawer
      v-model="drawer"
      absolute
      temporary
    >
      <v-list
        nav
        dense
      >
      <div class="nav-name" style="padding:5px">
        <h5>Manuel Álvarez</h5>
      </div>
        <v-list-item-group
          active-class="deep-purple--text text--accent-4"
        >
          <v-list-item>
            <v-list-item-icon>
              <v-icon>mdi-home</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Home</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <v-icon>mdi-account</v-icon>
            </v-list-item-icon>
            <v-list-item-title>About</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <v-icon>mdi-contacts</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Contact</v-list-item-title>
          </v-list-item>

          <v-list-item>
            <v-list-item-icon>
              <v-icon>mdi-blogger</v-icon>
            </v-list-item-icon>
            <v-list-item-title>Blog</v-list-item-title>
          </v-list-item>

        </v-list-item-group>
      </v-list>
    </v-navigation-drawer>
    </v-app>
</template>
<script>
  export default {
    data: () => ({
      drawer: false,
      mobile: false,
    }),
  }
</script>

<style scoped>
    .v-application, .navbar {
    max-height: 70px;
    }
</style>
