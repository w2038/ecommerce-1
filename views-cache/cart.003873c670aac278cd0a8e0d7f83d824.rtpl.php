<?php if(!class_exists('Rain\Tpl')){exit;}?>    <!-- cart section end -->
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>Seu Carrinho</h3>
                        <div class="cart-table-warp">
                            <table>
                            <thead>
                                <tr>
                                    <th class="product-th">Produto</th>
                                    <th class="quy-th">Quantidade</th>
                                    <th class="total-th">Preço</th>
                                    <th class="total-th">Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-col">
                                        <img src="img/cart/1.jpg" alt="">
                                        <div class="pc-title">
                                            <h4>Animal Print Dress</h4>
                                            <p>R$45.90</p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-col"><h4>R$45.90</h4></td>
                                    <td class="total-col"><i class="flaticon-cancel-1" href="#"></i></td>
                                </tr>
                                <tr>
                                    <td class="product-col">
                                        <img src="img/cart/2.jpg" alt="">
                                        <div class="pc-title">
                                            <h4>Ruffle Pink Top</h4>
                                            <p>R$45.90</p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-col"><h4>R$45.90</h4></td>
                                    <td class="total-col"><i class="flaticon-cancel-1" href="#"></i></td>
                                </tr>
                                <tr>
                                    <td class="product-col">
                                        <img src="img/cart/3.jpg" alt="">
                                        <div class="pc-title">
                                            <h4>Skinny Jeans</h4>
                                            <p>R$45.90</p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-col"><h4>R$45.90</h4></td>
                                    <td class="total-col"><i class="flaticon-cancel-1" href="#"></i></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        <div class="total-cost">
                            <h6>Total <span>R$99.90</span></h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 card-right" action="/checkout">

                    <div class="alert alert-danger" role="alert">
                        Erro!
                    </div>

                    <form class="promo-code-form">
                        <input type="text" placeholder="Cupom de desconto">
                        <button>Aplicar</button>
                    </form>
                    <form class="promo-code-form">
                        <input type="text" placeholder="CEP 00000-000">
                        <button>Calcular</button>
                    </form>
                    <a href="" class="site-btn">Finalizar compra</a>
                    <a href="" class="site-btn sb-dark">Continuar comprando</a>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->