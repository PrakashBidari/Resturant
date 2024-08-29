@extends('frontend.layouts.master')
@section('main')
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container text-center my-5 pt-5 pb-4">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Menu Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                <h1 class="mb-5">Most Popular Items</h1>
            </div>
            <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
             

                <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                    @foreach ($categories as $category)
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 category-link"
                                data-bs-toggle="pill" href="#tab-{{ $category->id }}" data-parent-id="{{ $category->id }}">
                                {{-- <i class="fa fa-utensils fa-2x text-primary"></i> --}}
                                <div class="ps-3">
                                    {{-- <small class="text-body">{{ $category->description }}</small> --}}
                                    <h6 class="mt-n1 mb-0">{{ $category->name }}</h6>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    <div class="row">
                        <div id="tab-content-placeholder"
                            class="tab-pane fade show p-0 active row justify-content-between gx-5">
                            <!-- Content will be loaded here via AJAX -->
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- Menu End -->

    <!-- Modal -->
    <div class="modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Order Quantity</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body form-group">
                    <p>Total Price:- </p>
                    <label for="qty">Quantity:</label>
                    <input class="form-control" type="number" id="qty" name="qty">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <div class="order-list container" id="order-list">
        <h4 class="text-primary">All Order</h4>

    </div>
@endsection

@section('customJS')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Attach click event to each category link
            document.querySelectorAll('.category-link').forEach(function(link) {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    let parentId = this.getAttribute('data-parent-id');
                    loadMenuItems(parentId);
                });
            });

            // Function to load menu items based on parent category ID
            function loadMenuItems(parentId) {
                fetch(`/menus/${parentId}`)
                    .then(response => response.json())
                    .then(data => {
                        // Clear the content placeholder
                        let contentPlaceholder = document.getElementById('tab-content-placeholder');
                        contentPlaceholder.innerHTML = '';

                        // Populate with new content
                        data.forEach(menu => {
                            // console.log(menu.image.url)
                            let myImage = 'storage/' + menu.image.url + '/' + menu.image.saved_name;
                            console.log(menu);
                            // let menuHtml = `
                        //         <div class="col-lg-6">
                        //             <div class="d-flex align-items-center mt-3">
                        //                 <img class="flex-shrink-0 img-fluid rounded my-img-sh"
                        //                     src="${myImage}" alt="" style="width: 50px;">
                        //                 <div class="w-100 d-flex flex-column text-start ps-4">
                        //                     <h5 class="d-flex justify-content-between border-bottom pb-2">
                        //                         <span class="fs-6 fw-normal">${menu.title}</span>
                        //                         <span class="text-primary fs-6 fw-semibold">Rs. ${menu.price}</span>
                        //                         <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        //                         Order
                        //                         </button>
                        //                     </h5>
                        //                 </div>
                        //             </div>
                        //         </div>
                        //     `;


                            let menuHtml = `
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center mt-3">
                                        <img class="flex-shrink-0 img-fluid rounded my-img-sh"
                                            src="${myImage}" alt="" style="width: 50px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span class="fs-6 fw-normal">${menu.title}</span>
                                                <span class="text-primary fs-6 fw-semibold">Rs. ${menu.price}</span>
                                                <button type="button" class="btn btn-sm btn-success order-btn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal"
                                                        data-title="${menu.title}"
                                                        data-price="${menu.price}">
                                                    Order
                                                </button>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                            `;
                            contentPlaceholder.innerHTML += menuHtml;
                        });
                    })
                    .catch(error => console.error('Error fetching menu items:', error));
            }

            // Load the first category's menu items on page load
            let firstCategoryId = document.querySelector('.category-link').getAttribute('data-parent-id');
            loadMenuItems(firstCategoryId);
        });





        document.addEventListener('DOMContentLoaded', function() {
            // Get references to modal elements
            const exampleModal = document.getElementById('exampleModal');
            const quantityInput = document.getElementById('qty');
            const totalPriceElement = exampleModal.querySelector('.modal-body p');

            let currentPrice = 0; // To store the price of the selected menu item

            // When the modal is shown, update the title and price
            exampleModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget; // Button that triggered the modal
                const menuTitle = button.getAttribute('data-title');
                currentPrice = parseFloat(button.getAttribute('data-price'));

                // Update modal title
                exampleModal.querySelector('.modal-title').textContent = `Order ${menuTitle}`;

                // Set the initial total price
                totalPriceElement.textContent = `Total Price: Rs. ${currentPrice}`;
                quantityInput.value = 1; // Set default quantity to 1
            });

            // Update the total price whenever the quantity changes
            quantityInput.addEventListener('input', function() {
                const quantity = parseInt(quantityInput.value) || 0; // Default to 0 if not a valid number
                const totalPrice = currentPrice * quantity;
                totalPriceElement.textContent = `Total Price: Rs. ${totalPrice.toFixed(2)}`;
            });
        });



        document.addEventListener('DOMContentLoaded', function() {
            const exampleModal = document.getElementById('exampleModal');
            const quantityInput = document.getElementById('qty');
            const totalPriceElement = exampleModal.querySelector('.modal-body p');
            const orderList = document.getElementById('order-list');

            let currentPrice = 0;
            let currentItemId = null;
            let currentTitle = '';

            let allOrders = [];


            // Object to track orders
            const orders = {};



            // Show modal with menu item details
            exampleModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget;
                currentTitle = button.getAttribute('data-title');
                currentPrice = parseFloat(button.getAttribute('data-price'));
                currentItemId = button.closest('.col-lg-6').dataset.itemId;

                // Set modal title
                exampleModal.querySelector('.modal-title').textContent = `Order ${currentTitle}`;

                // Set initial values
                quantityInput.value = orders[currentItemId] ? orders[currentItemId].quantity : 1;
                totalPriceElement.textContent = `Total Price: Rs. ${quantityInput.value * currentPrice}`;
            });

            // Update total price based on quantity input
            quantityInput.addEventListener('input', function() {
                const quantity = parseInt(quantityInput.value) || 0;
                const totalPrice = currentPrice * quantity;
                totalPriceElement.textContent = `Total Price: Rs. ${totalPrice.toFixed(2)}`;
            });

            // Handle the "Save" button click in the modal
            const saveButton = exampleModal.querySelector('.btn-primary');
            saveButton.addEventListener('click', function() {
                const quantity = parseInt(quantityInput.value) || 0;

                if (quantity > 0) {
                    // Set the new quantity for the current item
                    orders[currentItemId] = {
                        title: currentTitle,
                        quantity: quantity,
                        price: currentPrice
                    };
                    updateOrderList();
                }

                // Close the modal
                bootstrap.Modal.getInstance(exampleModal).hide();
            });

            // Function to update the order list display
            function updateOrderList() {
                // orderList.innerHTML = ''; // Clear the current list

                Object.keys(orders).forEach(itemId => {
                    const order = orders[itemId];
                    allOrders.push(order);

                });

                allOrders.forEach((order, index) => {
                    console.log(allOrders);
                    const orderHtml = `
                <div class="order-item" id="order-${index}">
                    <span>${order.title} (x${order.quantity})</span>
                    <span>Total: Rs. ${order.quantity * order.price}</span>
                </div>
            `;

                    // Append new order or update existing one
                    let existingOrder = document.getElementById(`order-${index}`);
                    if (existingOrder) {
                        existingOrder.innerHTML = orderHtml;
                    } else {
                        orderList.innerHTML += orderHtml;
                    }
                });
            }
        });
    </script>
@endsection
