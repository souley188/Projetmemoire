
<?php $__env->startSection('title'); ?>
    Espace client
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<main>
        <section class="client-section">
            <h1>Espace Client</h1>
            <div class="client-forms">
                <div class="form-container">
                    <h2>Connexion</h2>
                    <form class="client-form" id="login-form">
                        <label for="login-email">Email</label>
                        <input type="email" id="login-email" name="email" placeholder="Votre email" required>
                        <label for="login-password">Mot de passe</label>
                        <input type="password" id="login-password" name="password" placeholder="Votre mot de passe" required>
                        <button type="submit">Se connecter</button>
                    </form>
                </div>
                <div class="form-container">
                    <h2>Inscription</h2>
                    <form class="client-form" id="register-form">
                        <label for="register-name">Nom</label>
                        <input type="text" id="register-name" name="name" placeholder="Votre nom" required>
                        <label for="register-email">Email</label>
                        <input type="email" id="register-email" name="email" placeholder="Votre email" required>
                        <label for="register-password">Mot de passe</label>
                        <input type="password" id="register-password" name="password" placeholder="Votre mot de passe" required>
                        <button type="submit">S'inscrire</button>
                    </form>
                </div>
            </div>
        </section>
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.principale', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\soule\Administrateur\admin-colis\resources\views/pages/espace-client.blade.php ENDPATH**/ ?>