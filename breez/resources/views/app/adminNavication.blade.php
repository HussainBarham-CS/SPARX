<div class="navigation">
    <ul>

        <li>
            <a href="">
                 <span class="icon"><ion-icon name="storefront-outline"></ion-icon></span>
                 <span class="title">{{ $shop->shopName }}</span>
            </a>
        </li>

        <li>
            <a href="{{ route('dashboard',$shop->id) }}">
                 <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                 <span class="title">Dashboard</span>
            </a>
        </li>


        <li>

            <a href="{{ route('admin.products',$shop->id)}}">
                 <span class="icon"><ion-icon name="pricetags-outline"></ion-icon></span>
                 <span class="title">Products</span>
            </a>

        </li>

        <li>

            <a href="{{ route('admin.add',$shop->id)}}">
                 <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>
                 <span class="title">Add Products</span>
            </a>

        </li>

        <li>
            <a href="">
                 <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                 <span class="title">Custemers</span>
            </a>
        </li>

        <li>
            <a href="">
                 <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                 <span class="title">Messages</span>
            </a>
        </li>

        <li>
            <a href="">
                 <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                 <span class="title">Help</span>
            </a>
        </li>

        <li>
            <a href="">
                 <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                 <span class="title">Settings</span>
            </a>
        </li>

        <li>
            <a href="">
                 <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                 <span class="title">Password</span>
            </a>
        </li>

        <li>

            <a  href="{{ route('logout') }}">
                <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                <span class="title">Log out</span>
            </a>
        </li>
    </ul>
</div>
