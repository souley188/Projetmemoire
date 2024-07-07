<div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Administrateur</span>
                    </a>
                </li>

                <li>
                    <a href="partials.admin.cards">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

               
                
                <li>
                    <a href="">
                        <span class="icon">
                            <ion-icon name="help-utline"></ion-icon>
                        </span>
                        <span class="title"></span>
                    </a>
                </li>
               
                <li>
                    <a href="">
                        <span class="icon">
                            <ion-icon name="help-utline"></ion-icon>
                        </span>
                        <span class="title"></span>
                    </a>
                </li>
                <li>
                   <form action="{{ route('logout') }}" method="POST">
                    @csrf
                     <!-- other form fields or buttons -->
                            <button type="submit">Logout</button>
                   </form>

                    
                </li>

               

            </ul>
</div>