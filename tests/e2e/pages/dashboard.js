const { BasePage } = require('kakunin');

class DashboardPage extends BasePage {
  constructor() {
    super();

    this.url = '/bolt/';

    this.profile_text = element(by.css('#toolbar .is-profile'));
    this.header = element(by.css('.admin__header--title strong'));
    this.edit_button = element(by.css('#listing .listing__row .listing--actions .link'));
    this.record_title = element(by.css('#listing .listing__row .is-details a'));
  }
}

module.exports = DashboardPage;