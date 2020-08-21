<template>
    <v-app>
    <v-tabs
    background-color="white"
    color="indigo ighten-5"
    right
    show-arrows
    >
    <v-tab>Angular</v-tab>
    <v-tab>Laravel</v-tab>
    <v-tab>Vue</v-tab>
    <v-tab-item>
    <v-container fluid>
        <v-row dense>
        <v-col
          v-for="card in cards"
          :key="card.title"
          :lg="4"
          :md="6"
          :sm="12"
        >
        <v-card
            class="mx-auto"
            max-width="500"
        >
            <v-list-item>
            <v-list-item-avatar color="grey">
                <v-img
                :src="card.avatar">
                </v-img>
            </v-list-item-avatar>
            <v-list-item-content>
                <v-list-item-title class="headline">{{card.title}}</v-list-item-title>
                <v-list-item-subtitle>{{card.subtitle}}</v-list-item-subtitle>
            </v-list-item-content>
            </v-list-item>

            <v-img
            :src="card.src"
            height="200px"
            ></v-img>

            <v-card-text>
            {{card.description}}
            </v-card-text>

            <v-card-actions>
            <v-btn
                text
                color="deep-purple accent-4"
            >
                Read
            </v-btn>
            <v-btn
                text
                color="deep-purple accent-4"
            >
                Bookmark
            </v-btn>
            <v-spacer></v-spacer>
            <v-btn icon>
                <v-icon>mdi-heart</v-icon>
            </v-btn>
            <v-btn icon>
                <v-icon>mdi-share-variant</v-icon>
            </v-btn>
            </v-card-actions>
        </v-card>
        </v-col>
      </v-row>
      </v-container>
    </v-tab-item>
    <v-tab-item>
        <v-container fluid>
        <v-row dense>
        <v-col
          v-for="card in cards"
          :key="card.title"
          :lg="4"
          :md="6"
          :sm="12"
        >
        <v-card
            class="mx-auto"
            max-width="500"
        >
            <v-list-item>
            <v-list-item-avatar color="grey">
                <v-img
                :src="card.avatar">
                </v-img>
            </v-list-item-avatar>
            <v-list-item-content>
                <v-list-item-title class="headline">{{card.title}}</v-list-item-title>
                <v-list-item-subtitle>{{card.subtitle}}</v-list-item-subtitle>
            </v-list-item-content>
            </v-list-item>

            <v-img
            :src="card.src"
            height="200px"
            ></v-img>

            <v-card-text>
            {{card.description}}
            </v-card-text>

            <v-card-actions>
            <v-btn
                text
                color="deep-purple accent-4"
            >
                Read
            </v-btn>
            <v-btn
                text
                color="deep-purple accent-4"
            >
                Bookmark
            </v-btn>
            <v-spacer></v-spacer>
            <v-btn icon>
                <v-icon>mdi-heart</v-icon>
            </v-btn>
            <v-btn icon>
                <v-icon>mdi-share-variant</v-icon>
            </v-btn>
            </v-card-actions>
        </v-card>
        </v-col>
      </v-row>
      </v-container>
    </v-tab-item>
    <v-tab-item>
        <v-container fluid>
        <v-row dense>
        <v-col
          v-for="card in cards"
          :key="card.title"
          :lg="4"
          :md="6"
          :sm="12"
        >
        <v-card
            class="mx-auto"
            max-width="500"
        >
            <v-list-item>
            <v-list-item-avatar color="grey">
                <v-img
                :src="card.avatar">
                </v-img>
            </v-list-item-avatar>
            <v-list-item-content>
                <v-list-item-title class="headline">{{card.title}}</v-list-item-title>
                <v-list-item-subtitle>{{card.subtitle}}</v-list-item-subtitle>
            </v-list-item-content>
            </v-list-item>

            <v-img
            :src="card.src"
            height="200px"
            ></v-img>

            <v-card-text>
            {{card.description}}
            </v-card-text>

            <v-card-actions>
            <v-btn
                text
                color="deep-purple accent-4"
            >
                Read
            </v-btn>
            <v-btn
                text
                color="deep-purple accent-4"
            >
                Bookmark
            </v-btn>
            <v-spacer></v-spacer>
            <v-btn icon>
                <v-icon>mdi-heart</v-icon>
            </v-btn>
            <v-btn icon>
                <v-icon>mdi-share-variant</v-icon>
            </v-btn>
            </v-card-actions>
        </v-card>
        </v-col>
      </v-row>
      </v-container>
    </v-tab-item>

    </v-tabs>




    </v-app>
</template>

<script>
  export default {
    data: () => ({
      cards: [
        { avatar: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', title: 'Pre-fab homes', subtitle:'Manuel Alvarez', description:'Visit ten places on our planet that are undergoing the biggest changes today.', src: 'https://cdn.vuetifyjs.com/images/cards/house.jpg' },
        { avatar: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', title: 'Favorite road trips',subtitle:'Manuel Alvarez', description:'Visit ten places on our planet that are undergoing the biggest changes today.', src: 'https://cdn.vuetifyjs.com/images/cards/road.jpg' },
        { avatar: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', title: 'Best airlines',subtitle:'Manuel Alvarez', description:'Visit ten places on our planet that are undergoing the biggest changes today.', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg' },
        { avatar: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', title: 'Best airlines',subtitle:'Manuel Alvarez', description:'Visit ten places on our planet that are undergoing the biggest changes today.', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg' },
        { avatar: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', title: 'Best airlines',subtitle:'Manuel Alvarez', description:'Visit ten places on our planet that are undergoing the biggest changes today.', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg' },
        { avatar: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', title: 'Best airlines',subtitle:'Manuel Alvarez', description:'Visit ten places on our planet that are undergoing the biggest changes today.', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg' },
        { avatar: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', title: 'Best airlines',subtitle:'Manuel Alvarez', description:'Visit ten places on our planet that are undergoing the biggest changes today.', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg' },
        { avatar: 'https://cdn.vuetifyjs.com/images/cards/house.jpg', title: 'Best airlines',subtitle:'Manuel Alvarez', description:'Visit ten places on our planet that are undergoing the biggest changes today.', src: 'https://cdn.vuetifyjs.com/images/cards/plane.jpg' },
      ],
    }),
  }
</script>
