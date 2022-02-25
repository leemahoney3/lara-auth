<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lara Auth</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    </head>
    <body>
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="navbar-brand">
                <a class="navbar-item" href="{{ route('home') }}">
                    <b>Lara Auth</b>
                </a>

                <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    @guest
                    <div class="buttons">
                        <a class="button is-primary" href="{{ route('auth.signup') }}">
                            <strong>Sign up</strong>
                        </a>
                        <a class="button is-light" href="{{ route('auth.signin') }}">
                            Sign in
                        </a>
                    </div>
                    @endguest

                    @auth
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link">
                                {{ auth()->user()->name }}
                            </a>

                            <div class="navbar-dropdown is-right">
                                <a class="navbar-item">
                                    Dashboard
                                </a>
                                <a class="navbar-item">
                                    Account Settings
                                </a>
                                <a class="navbar-item">
                                    Your Profile
                                </a>
                                <hr class="navbar-divider">
                                <a class="navbar-item" href="{{ route('auth.signout') }}">
                                    Sign out
                                </a>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </nav>
        @yield('content')
        <script>
            document.addEventListener('DOMContentLoaded', () => {
                (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
                    const $notification = $delete.parentNode;

                    $delete.addEventListener('click', () => {
                    $notification.parentNode.removeChild($notification);
                    });
                });
            });
        </script>
    </body>
</html>