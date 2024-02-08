import Cookie from 'js-cookie'

// Default to light if no cookie/storage or external prefs
const defaultTheme = 'light'

const toggleTheme = (theme: string) => {
  // On page load or when changing themes, best to add inline in `head` to avoid FOUC
  if (theme === 'dark') {
    document.documentElement.classList.add('dark')
  } else {
    document.documentElement.classList.remove('dark')
  }

  // Always set cookie and local storage to selected theme, regardless if light or dark
  Cookie.set('theme', theme, { expires: 999, sameSite: 'lax' })
  localStorage.theme = theme
}

function init() {
  // Get theme from localstorage (highest priority) OR user preferred theme (can be set by OS). Default to light.
  const theme =
    localStorage.theme ||
    (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : defaultTheme)

  // Toggle on page load
  toggleTheme(theme)
}

export { init }
