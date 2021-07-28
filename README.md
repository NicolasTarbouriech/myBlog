<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

##  My First Laravel Blog

Ce blog laravel est une création de Nicolas Tarbouriech, avec l'aide des cours de laravel 8 disponible sur laravel.sillo.org.
Ce blog a pour vocation de publier des posts (avec photos), commentaires, et réponses a des commentaires. 

3 rôles existent : administrateur / Rédacteur / Utilisateur.
L'invité a juste accès aux posts et aux commentaires.
L'utilisateur peut créer des commentaires.
Le rédacteur peut créer des articles et des commentaires.

L'administrateur valide le premier commentaire de chaque utilisateur afin de s'assurer que ce n'est pas un troll. Il dispose d'un tableau de bord lui indiquant les denriers posts / Commentaires. Il peut modifier, supprimer, créer des posts, catégories, utilisateurs, pages de contacts...

Pour les utilisateurs connectés il y'a aussi une partie profile, permettant de confirmer son mdp et de changer ses informations personnelles au besoin.

Le tout fonctionne avec une base de donnée MYSQL.
