import TestComponent from '../TestComponent.vue'

describe('TestComponent', () => {
  it('playground', () => {
    cy.mount(TestComponent, { props: { msg: 'Hello Cypress' } })
  })

  it('renders properly', () => {
    cy.mount(TestComponent, { props: { msg: 'Hello Cypress' } })
    cy.get('h1').should('contain', 'Hello Cypress')
  })
})
