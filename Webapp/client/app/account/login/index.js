'use strict';

import angular from 'angular';
import LoginController from './login.controller';

export default angular.module('webappApp.login', [])
  .controller('LoginController', LoginController)
  .name;
