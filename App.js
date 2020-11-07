import React, { Component } from 'react';
import Header from './components/Header';
import Footer from './components/Footer';
import Products from './components/Products';
import Cart from './components/Cart';
import CartSvg from './components/CartSvg'

class App extends Component {
  constructor() {
    super();

    this.state = {
      isCartOpen: false,
      checkout: { lineItems: [] },
      products_1: [],
      products_2: [],
      products_3: [],
      products_4: [],
      products_5: [],
      products_6: [],
      shop: {}
    };

    this.handleCartClose = this.handleCartClose.bind(this);
    this.handleCartOpen = this.handleCartOpen.bind(this);
    this.addVariantToCart = this.addVariantToCart.bind(this);
    this.updateQuantityInCart = this.updateQuantityInCart.bind(this);
    this.removeLineItemInCart = this.removeLineItemInCart.bind(this);
  }

  createNewCheckout = () => {
    this.props.client.checkout.create().then((res) => {
      this.setState({
        checkout: res,
      });
      localStorage.setItem('checkoutId', res.id)
    });
  }

  componentDidMount() {
    const checkoutId = localStorage.getItem('checkoutId');

    if (checkoutId) {
      this.props.client.checkout.fetch(checkoutId)
        .then((res) => {
          // Create a new cart if complete
          if (res.completedAt) {
            this.createNewCheckout()
          } else {
            this.setState({
              checkout: res,
            });
          }
        })
        .catch((err) => {
          // console.log('There was an error:', err)
          this.createNewCheckout()
        });
    } else {
      this.createNewCheckout()
    }

    // Fetch a series of collections by ID, including its products
    // Home Page collection id
    const collectionIds = [
      'Z2lkOi8vc2hvcGlmeS9Db2xsZWN0aW9uLzE2NzUyMzcxMzA3Mg==', // 2020 Drop Sept
      'Z2lkOi8vc2hvcGlmeS9Db2xsZWN0aW9uLzE1ODA1ODM0ODU5Mg==', // Christmas Drop
      'Z2lkOi8vc2hvcGlmeS9Db2xsZWN0aW9uLzE1MTI1NjkyNDIwOA==', // Winter 19 Drop
      'Z2lkOi8vc2hvcGlmeS9Db2xsZWN0aW9uLzEzMzY4NzM0NTIwMA==', // Summer 19 Drop
      'Z2lkOi8vc2hvcGlmeS9Db2xsZWN0aW9uLzEzMzY4NTU3NTcyOA==', // Home Page A
    ]

    this.props.client.collection.fetchWithProducts(collectionIds[0], {productsFirst: 250}).then((collection) => {
      this.setState({
        products_1: collection.products
      });
    });

    this.props.client.collection.fetchWithProducts(collectionIds[1], {productsFirst: 250}).then((collection) => {
      this.setState({
        products_2: collection.products
      });
    });

    this.props.client.collection.fetchWithProducts(collectionIds[2], {productsFirst: 250}).then((collection) => {
      this.setState({
        products_3: collection.products
      });
    });

    this.props.client.collection.fetchWithProducts(collectionIds[3], {productsFirst: 250}).then((collection) => {
      this.setState({
        products_4: collection.products
      });
    });

    this.props.client.collection.fetchWithProducts(collectionIds[4], {productsFirst: 250}).then((collection) => {
      this.setState({
        products_5: collection.products
      });
    });

    // this.props.client.collection.fetchAll().then((collections) => {
    //   for (var i = 0; i < collections.length; i++) {
    //     console.log(collections[i], collections[i].title, collections[i].id)
    //   }
    // });

    this.props.client.shop.fetchInfo().then((res) => {
      this.setState({
        shop: res,
      });
    });
  }

  addVariantToCart(variantId, quantity){
    this.setState({
      isCartOpen: true,
    });

    const lineItemsToAdd = [{variantId, quantity: parseInt(quantity, 10)}]
    const checkoutId = this.state.checkout.id

    return this.props.client.checkout.addLineItems(checkoutId, lineItemsToAdd).then(res => {
      this.setState({
        checkout: res,
      });
    });
  }

  updateQuantityInCart(lineItemId, quantity) {
    const checkoutId = this.state.checkout.id
    const lineItemsToUpdate = [{id: lineItemId, quantity: parseInt(quantity, 10)}]

    return this.props.client.checkout.updateLineItems(checkoutId, lineItemsToUpdate).then(res => {
      this.setState({
        checkout: res,
      });
    });
  }

  removeLineItemInCart(lineItemId) {
    const checkoutId = this.state.checkout.id

    return this.props.client.checkout.removeLineItems(checkoutId, [lineItemId]).then(res => {
      this.setState({
        checkout: res,
      });
    });
  }

  handleCartClose() {
    this.setState({
      isCartOpen: false,
    });
  }

  handleCartOpen() {
    this.setState({
      isCartOpen: true,
    });
  }

  render() {
    let cartQuantity = 0;
    const lineItems = this.state.checkout ? this.state.checkout.lineItems : []

    for (var i = 0; i < lineItems.length; i++) {
      cartQuantity += lineItems[i].quantity
    }

    return (
      <div className="App">
        <Header />
        <Products
          products={this.state.products_1}
          addVariantToCart={this.addVariantToCart}
        />
        <Products
          products={this.state.products_2}
          addVariantToCart={this.addVariantToCart}
        />
        <Products
          products={this.state.products_3}
          addVariantToCart={this.addVariantToCart}
        />
        <Products
          products={this.state.products_4}
          addVariantToCart={this.addVariantToCart}
        />
        <Products
          products={this.state.products_5}
          addVariantToCart={this.addVariantToCart}
        />
        <Footer />
        {cartQuantity > 0 &&
          <div className="App__view-cart-wrapper">
            <button className="App__view-cart" onClick={this.handleCartOpen}>
              <div className="count">{cartQuantity}</div>
              <CartSvg/>
            </button>
          </div>
        }
        <Cart
          checkout={this.state.checkout}
          isCartOpen={this.state.isCartOpen}
          handleCartClose={this.handleCartClose}
          updateQuantityInCart={this.updateQuantityInCart}
          removeLineItemInCart={this.removeLineItemInCart}
        />
      </div>
    );
  }
}

export default App;
