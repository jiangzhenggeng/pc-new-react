import 'core-js/es6/map'
import 'core-js/es6/set'
import 'raf/polyfill'

import './style/less/base.less';
import React from 'react';
import ReactDom from 'react-dom';
import {Provider} from 'react-redux';

import App from './app';
import configureStore from './redux/store/configureStore';

let store = configureStore();

ReactDom.render(
	<Provider store={store}>
		<App/>
	</Provider>,
	document.getElementById('app')
);





