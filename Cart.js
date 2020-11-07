import React, {Component} from 'react';
import LineItem from './LineItem';

class Cart extends Component {
  constructor(props) {
    super(props);

    this.openCheckout = this.openCheckout.bind(this);
  }

  openCheckout() {
    window.open(this.props.checkout.webUrl);
  }

  render() {
    let line_items = this.props.checkout.lineItems.map((line_item) => {
      return (
        <LineItem
          updateQuantityInCart={this.props.updateQuantityInCart}
          removeLineItemInCart={this.props.removeLineItemInCart}
          key={line_item.id.toString()}
          line_item={line_item}
        />
      );
    });

    return (
      <div className={`Cart ${this.props.isCartOpen && 'Cart--open'}`}>
        <header className="Cart__header">
          <button
            onClick={this.props.handleCartClose}
            className="Cart__close">
            ×
          </button>
        </header>
        <ul className="Cart__line-items">
          {line_items}
        </ul>
        <footer className="Cart__footer">
          <div className="CartInfo clearfix">
            <div className="CartInfo__total">Subtotal</div>
            <div className="CartInfo__pricing">
              <span className="pricing">${Math.floor(this.props.checkout.subtotalPrice)}</span>
            </div>
          </div>
          <button className="Cart__checkout button" onClick={this.openCheckout}>Checkout</button>
          <div className="CartInfo__small">
            Shipping and discount codes are added at checkout
          </div>
        </footer>
      </div>
    )
  }
}

export default Cart;
