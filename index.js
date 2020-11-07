import React from 'react';
import ReactDOM from 'react-dom';
import Client from 'shopify-buy';
import './App.scss';
import App from './App';
import * as serviceWorker from './serviceWorker';

const client = Client.buildClient({
  storefrontAccessToken: 'efee64374afd1de1bde808461c45fab8',
  domain: 'online-ceramics-too.myshopify.com'
});

ReactDOM.render(
  <App client={client}/>,
  document.getElementById('root')
);

// If you want your app to work offline and load faster, you can change
// unregister() to register() below. Note this comes with some pitfalls.
// Learn more about service workers: https://bit.ly/CRA-PWA
serviceWorker.unregister();
