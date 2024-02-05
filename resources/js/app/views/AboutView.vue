<template>
  <main>
    <h1>This is an about page. <a href="#">...and I'm a link.</a></h1>
    <p class="description text-xl">
      Lorem ipsum dolor sit amet. <a href="#">I am a link inside another element.</a>
    </p>
  </main>
</template>

<style scoped lang="postcss">
h1 {
  color: greenyellow;

  & a {
    color: red;
  }
}

.description {
  @apply text-amber-200;

  & a {
    @apply px-4;
    color: lightpink;
  }
}
</style>
