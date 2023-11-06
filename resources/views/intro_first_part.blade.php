@extends('start')

@section('content')
<div id="introduction">
    <div id="intro-text">
        <h1>La Callebasse D'Armant</h1>
        <p class="picture-intro-text"><img class="image-intro-text"
                src="{{ asset('art/story/fishingboats.png') }}" alt="">Votre
            petite embarcation touche enfin le ponton en bois. Vous amarrez solidement, abattez la voile et la
            pliez dans le bon sens afin qu’elle sèche. Vous rangez les cordes dans leurs emplacements et
            finalement
            avec
            une fierté non dissimulée, montrez du doigt les deux caisses pleines à ras bord de markels.</p>
        <br>
        <p>“Ils sont gros cette année les markels dis donc” vous dit Oswan, votre frère et compagnon de pêche.
            “Et encore”, répondez-vous, “si tu avais vu ceux qu’a pris le père Philip”.</p>
        <br>
        <p class="picture-intro-text">Vous déchargez votre butin, et le mettez en glace avant de refermer
            votre
            cabanon. Depuis le commandement
            Mercer de 431-10, à chaque pêcheur est attribué un cabanon équipé d’une glacière, d’un range-filet
            ainsi
            que
            d’une porte qu’il est possible de verrouiller avec un cadenas unique.<img class="image-intro-text"
                src="{{ asset('art/story/cabane.png') }}" alt=""></p>
        <br>
        <p>“Bon, on va s’en jeter un petit pour fêter ça ?” propose Oswan. Vous lui emboîtez le pas, la journée
            a
            décidément été délicieuse.
        </p>
        <br>
        <p>La ville d’Arlet est en pleine effervescence. Comme tout le monde le sait, les campagnes dans le sud
            du
            pays
            d’Armant ont été couronnées de succès et jamais on a ressenti plus grand sentiment de sécurité.</p>
        <br>
        <p class="picture-intro-text"><img class="image-intro-text"
                src="{{ asset('art/story/caravel.png') }}" alt="">L’autre
            raison de toute cette agitation, c’est l’arrivée ce matin d’une grande caravelle aux cales
            pleines
            d’alcool de pomme de terre. Il parait que c’est formidable, et tout le monde veut essayer, même les
            enfants.</p>
        <br>
        <p>Vous précédez Oswan et de la main ferme de celui qui rapièce des filets poussez la porte de l’auberge
            des
            douze
            chameaux. D’imaginer qu’un jour de simples pêcheurs pourraient asseoir leur postérieur sur les
            banquettes
            douillettes de l’auberge relevait il y a quelques années d’un exercice mental compliqué. Seulement
            voilà,
            pêcher était une activité difficile et le poisson était un mets recherché. La loi de l’offre et la
            demande
            est universelle.</p>
        <br>
        <p>“Donnez-moi deux pichets de cet alcool dont on nous dit le plus grand bien” crie Oswan, fort de son
            rang
            nouvellement acquis. Le tavernier s’exécute avec empressement. Oswan, maintenant debout sur sa
            banquette
            était sur le point de lever son pichet lorsqu’il fut interrompu par de forts applaudissements.</p>
        <br>
        <p class="picture-intro-text">Toute l’auberge était à présent tournée vers la petite scène. Un des
            serveurs, essayant de se faire le
            plus
            discret possible, allumait de grandes bougies avant de les remettre dans des photophores en métal
            finement
            gravés.<img class="image-intro-text" src="{{ asset('art/story/tavern-intro.png') }}" alt=""></p>
        <br>
        <p>D’un seul coup, Oswan comprit pourquoi l’attention des gens s’était détournée de lui. “C’est Kadar,
            Kadar
            Kisk va conter” chuchota t-il en se rasseyant.</p>
        <br>


        <p class="picture-intro-text"><img class="image-intro-text" src="{{ asset('art/story/kadar2.png') }}"
                alt="">À
            pas
            mesurés, sur la droite de la petite estrade, arrive Kadar Kisk. C’est un petit homme rabougri, sec
            avec une barbe blanche bien taillée. Il s’aide pour marcher d’un bâton de grande taille dans lequel
            est
            serti ce qui semble être un simple caillou. Il gravit une à une les trois marches qui mènent à la
            scène
            puis, portant sa main libre sur le dessus de son bâton, murmure quelques mots inintelligibles.</p>
        <br>
        <p>Brusquement, toutes les flammes des bougies à l’exception de celles couvertes de photophores
            s’évanouissent
            et il fait nuit noire. On entend bien quelques murmures mais l’attention de l’auditoire n’a jamais
            été
            aussi
            complète. On ne distingue plus que Kadar, maintenant bien installé sur un petit tabouret installé à
            son
            intention.</p>
        <br>
        <p>“Nous n’avons pas toujours été riches. Nous n’avons pas toujours été nantis. Nous n’avons pas
            toujours
            mangé
            à notre faim et encore moins bu à notre soif.” Ainsi débuta le conte de Kadar.</p>
        <br>
        <p>Il parlait d’une voix forte mais agréable aux oreilles. Il apaisait mais n’endormait pas, faisait
            frissonner, mais n’ennuyait jamais.</p>
        <br>
        <p>“J’ai maintenant 109 ans, et avant la fin de cette année, si Sadis m’y autorise, je franchirai les
            110.”
            Il
            marqua une longue pause.</p>
        <br>
        <p class="picture-intro-text">“Nous n’avons pas toujours bu à notre soif. Je vais vous conter
            l’histoire que mon père lui même me
            conta.
            Pour vous tous, la Source a toujours existé et pourtant...”<img class="image-intro-text"
                src="{{ asset('art/story/source.png') }}" alt=""></p>
        <div id="intro-to-preambule" class="action-button">
            <a href="{{ route('introduction.second') }}" class="btn-main-design">Poursuivre</a>
        </div>
    </div>
</div>
@endsection

