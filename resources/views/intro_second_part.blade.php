@extends('start')

@section('content')
<div id="act-one">
    <div id="act1-intro">
        <h1>Act I - Une Situation Peu Enviable</h1>
        <p> Nous sommes en 430-120, 219 ans avant le récit de Kadar Kisk, le pays d'Armant ne vit pas ses années
            les
            plus
            prospères.</p>
        <br>
        <p>Situé entre deux grands empires rivaux (Eskaït et Brianna) depuis presque un millénaire, ce petit
            pays
            désertique, pauvre mais densément peuplé est une proie privilégiée pour ses puissants voisins.</p>
        <br>
        <p class="picture-intro-text"><img class="image-intro-text" src="{{ asset('art/story/barrels.png') }}" alt="">Sa
            principale ressource est l'huile de roche, qu'on trouve à même le sol des grandes fosses situées au
            abord
            de la plus grande citée du royaume : Arlet. On y trouve aussi du sable noir très fin, à la texture
            presque
            veloutée, très convoité. Ce sable est la plus grande richesse du pays d’Armant. Il contient des
            métaux
            précieux comme de l’adamantine, ou encore du nickel. Le pays n'a pas ou peu d'eau et les seules
            sources
            sont
            situées sous la ville d'Arlet et sont contrôlées par la Junte.</p>
        <br>
        <p class="picture-intro-text">Le pays est tenu d'une main de fer par une organisation militaire: la
            Junte des cavaliers. La Junte
            contrôle
            toutes les ressources, l'eau ainsi que les rares sources de nourriture. Elle tire de larges
            richesses du
            prêt de pan entiers de territoires du pays d’Armant à Eskaït et Brianna qui s'en servent de champs
            de
            batailles, ne laissant que des ruines et des terres stériles. La Junte enrôle également de force les
            jeunes
            hommes et femmes du pays afin d’aller extraire le précieux sable noir.<img class="image-intro-text"
                src="{{ asset('art/story/junte-soldier.png') }}" alt=""></p>
        <br>
        <p>Les soldats qui composent la Junte sont invincibles, cruels et dépourvus d’émotions. On raconte
            qu'ils
            n'ont
            pas d'essence mortelle. Un petit nombre seulement ont tenté malgré tout de s'opposer à leur mainmise
            mais
            cela fait longtemps que personne ne s'est dressé contre eux. Celui qui tient l’eau tient la
            population.
        </p>
        <br>
        <p>Parmi celle-ci, une rumeur tenace court. Il existerait un moyen de faire revenir l’eau, un moyen de
            reprendre le contrôle du pays: il est de notoriété publique que les soldats de la Junte détestent
            l’eau.
        </p>
        <br>
        <p class="picture-intro-text"><img class="image-intro-text" src="{{ asset('art/story/callebasse.jpg') }}"
                alt="">Portée
            par des légendes, l’histoire d’une calebasse magique continue de vivre. Cette gourde, placée dans
            les
            bonnes conditions aurait un pouvoir d’infinité et générerait une eau pure sans fin. Elle aurait
            assez de
            débit pour remplir le large fleuve de la voie Bleue, qui traverse le pays d’Est en Ouest et
            redonnerait
            au
            pays d’Armant ce qui a dans le passé fait sa fortune.</p>

        <h1>Mission des joueurs</h1>

        <p>Vous faites partie d'une équipe de trois, envoyée à Arlet par un marchand de Brianna, maître Thaldar
            Beldin. Votre mission est
            d’amener à bon port votre charrette puis de rencontrer un autre marchand appelé Thonar Bottesdefer
            et de
            négocier avec lui l’achat de 6 tonneaux d’huile de roche.</p>
        <br>
        <p>Pour vous faire reconnaître de ce dernier, vous disposez d’une lettre scellée par Thaldar Beldin et
            qui
            lui
            est destinée. Thaldar vous a confié un laisser-passer qui devrait vous permettre de franchir la
            porte
            Noire
            au sud d’Arlet. Il vous a également remis de quoi régler vos dépenses de voyage (10 Pièces d'or
            chacun)
            et
            une cassette contenant de quoi négocier les tonneaux avec Thonar (700 Pièces d'or).</p>
        <br>
        <p> Il vous a aussi informé du fait que toute magie ayant trait à l’eau était prohibée dans le pays
            d’Armant.</p>
        <br>
        <p>Avec vous voyage Karmin Strohuk, un nain au physique formidable et à l’air sévère, chargé de la
            protection
            du convoi. Vous partez de Dria, capitale de Brianna, où se trouve le comptoir principal de la
            corporation
            Thaldar Beldin.</p>
        <br>
        <div class="action-button" id="act1-action">
            <a href="{{ route('heroes-selection') }}" class="btn-main-design">En route !</a>
        </div>
    </div>
</div>
@endsection

