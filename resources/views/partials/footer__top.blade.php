
  <div class="footer__top">
    <div class="container-lg">
      <ul>
        <li>
          <div class="card">
            <img
              src="{{asset('images/buy-comics-digital-comics.png')}}"
              alt="buy-digital-comics"
            /><a href="#">digital comics</a>
          </div>
        </li>
        <li>
          <div class="card">
            <img
              src="{{asset('images/buy-comics-merchandise.png')}}"
              alt="buy-comics-merchandise"
            /><a href="#">dc merchandise</a>
          </div>
        </li>
        <li>
          <div class="card">
            <img
              src="{{asset('images/buy-comics-subscriptions.png')}}"
              alt="buy-comics-subscriptions"
            /><a href="#">subscriptions</a>
          </div>
        </li>
        <li>
          <div class="card">
            <img
            src="{{asset('images/buy-comics-shop-locator.png')}}"

              alt="buy-comics-shop-locator"
            /><a href="#">comic shop locator</a>
          </div>
        </li>
        <li>
          <div class="card">
            <img
            src="{{asset('images/buy-dc-power-visa.svg')}}"
              alt="buy-dc-power-visa"
            /><a href="#">dc power visa</a>
          </div>
        </li>
      </ul>
    </div>
  </div>



<style lang="scss" scoped>
.footer__top {
  padding: 40px 0;
  background-color: var(--color-primary);

  ul {
    display: flex;
    align-items: center;
    justify-content: space-around;
    list-style: none;
  }
  .card {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    a {
      font-size: 0.8rem;
      text-decoration: none;
      text-transform: uppercase;
      color: white;
    }
    img {
      width: 3rem;
    }
  }
}
</style>