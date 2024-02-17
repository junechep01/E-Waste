
@extends('admin.app')
@section('content')
    <!-- ======================= Cards ================== -->
    <div class="cardBox">
        <div class="card">
            <a href="">
                <div>
                    <div class="numbers">10</div>
                    <div class="cardName">Registered Courses</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="eye-outline"></ion-icon>
                </div>

            </a>
            
        </div>

        <div class="card">
            <a href="{">
                <div>
                    <div class="numbers">20</div>
                    <div class="cardName">Products</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cart-outline"></ion-icon>
                </div>

            </a>
            
        </div>

        <div class="card">
            <a href="">
                <div>
                    <div class="numbers">10</div>
                    <div class="cardName">Emails</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="chatbubbles-outline"></ion-icon>
                </div>
            </a>
        </div>

        <div class="card">
            <a href="">
                <div>
                    <div class="numbers">1</div>
                    <div class="cardName">Services</div>
                </div>

                <div class="iconBx">
                    <ion-icon name="cash-outline"></ion-icon>
                </div>
            </a>
        </div>
    </div>

    <!-- ================ Order Details List ================= -->
    <div class="details">
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Recent Item Orders</h2>
                <a href="{" class="btn">View All</a>
            </div>

            <table>
                <thead>
                    <tr>
                        <td>Name</td>
                        <td>Item</td>
                        <td>Phone Number</td>
                        <td>Date</td>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Kigen </td>
                        <td>Fridge</td>
                        <td>0721</td>
                        <td><span class="status delivered">6 Days AGO</span></td>
                    </tr>
                    <tr>
                        <td>Kigen </td>
                        <td>Drone</td>
                        <td>07211448844</td>
                        <td><span class="status delivered">6 Days AGO</span></td>
                    </tr>
                    
                    

                  
                  
                </tbody>
            </table>
        </div>

        <!-- ================= New Customers ================ -->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Recent Course Applications</h2>
            </div>

            <table>
                
            </table>
        </div>
    </div>

@endsection