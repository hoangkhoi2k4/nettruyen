import { createApp } from 'vue';
import HomeComponent from './components/HomeComponent.vue';
import ViewAndInterest from './components/Home/ViewAndInterest.vue';
import PageComponent from './components/PageComponent.vue';

const app = createApp({});
app.component('home-component', HomeComponent);
app.mount('#app');

const appStory = createApp({});
appStory.component('story-full-new-component', ViewAndInterest);
appStory.mount('#app-story')

const appPage = createApp({});
appPage.component('page-component', PageComponent);
appPage.mount('#page')