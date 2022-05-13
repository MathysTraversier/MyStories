insert into story (sto_title,sto_description,sto_image) values
("Près de l'océan", "Vous incarnez un jeune surfeur de 21 ans. Il a pour habitude de prendre sa voiture et d’aller à l’eau tous les jours. En effet, Thomas à la chance d’habiter proche de la plage de Hossegor. Embarquez avec Thomas dans cette folle aventure !", "Affiche_Ocean.png");
insert into story (sto_title,sto_description,sto_image) values
("Asphalte", "Alice est une skateuse bordelaise qui adore s'entraîner après les cours. Elle a pour habitude de se rendre aux skatepark Darwin et à celui des Chartrons. Venez découvrir le quotidien riche en actions d'Alice.", "Affiche_Skate.png");

insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas est un surfeur landais de 21 ans. Il a pour habitude de surfer tous les jours depuis son enfance. Il baigne dans le surf depuis toujours, ses parents l’ont toujours emmené lorsqu'ils partaient surfer. Ils ont une maison à 10 minutes en voiture de la plage d’Hossegor.", 1,true, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas prend rapidement sa douche et son petit déjeuner. Il regarde les prévisions de surf sur WindGuru, 1m80 en début de matinée avec 10 secondes de période. Il est content des conditions. Thomas prend sa combinaison, sa planche et file dans son van. Il fait encore nuit sur la route. Il se gare, se change, attrape sa planche et part sur le sable. Il s’échauffe les muscles avant de partir à l’eau. Il court en direction de l’océan et se jette sur sa planche une fois à l’eau. Il rame en direction du large et prend une première vague. Son leash se casse directement.", 2, false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas prend rapidement sa douche et prépare un brunch. Il regarde les prévisions de surf sur WindGuru en mangeant, 2m80 en début d’après-midi avec 10 secondes de période. Il est content des conditions même si les vagues vont être puissantes. Thomas prend sa combinaison, sa planche et file dans son van. Une fois arrivé à la plage, il se gare, se change et part sur le sable avec sa planche. Il s’échauffe les muscles avant de partir à l’eau. Il court en direction de l’océan et se jette sur sa planche une fois à l’eau. Il rame en direction du large et prend une première vague. Son leash se casse directement.", 2, false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas veut quand même prendre quelques vagues avant de retourner au van chercher un nouveau leash. La vague suivante est puissante, il tombe de la planche, cogne sa tête contre le sable. Il s'évanouit dans l’eau.", null, false, false, true, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas retourne au van, et prend un nouveau leash. Il voit le tube de crème solaire, mais il est impatient de retourner à l’eau. Il se demande s’il prend le temps d’en mettre.", 3,false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas hésite à peine et repars directement à l’eau, il fait nuageux de toute façon. Il commence à ramer en direction du large, première salve de vagues. Il voit quelqu’un s’apprêtant à prendre la même vague que lui. Mais Thomas a la priorité, il hésite à s’engager.", 4, false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Bien que Thomas soit frustré d'avoir cassé son leash et dû interrompre sa session pour revenir au van, il connaît l’importance de se crémer pour éviter les insolations. Il regarde l’heure sur son téléphone : 7h36. Il a encore le temps de surfer avant son cours à 10h10. Il commence à ramer en direction du large, première salve de vagues. Il voit quelqu’un s’apprêtant à prendre la même vague que lui. Mais Thomas a la priorité, il hésite à s’engager.", 4, false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Bien que Thomas soit frustré d'avoir cassé son leash et dû interrompre sa session pour revenir au van, il connaît l’importance de se crémer pour éviter les insolations. Il met donc de la crème solaire et repart à l’eau. Il commence à ramer en direction du large, première salve de vagues. Il voit quelqu’un s’apprêtant à prendre la même vague que lui. Mais Thomas a la priorité, il hésite à s’engager.", 4, false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas se place pour prendre la vague, rame énergiquement et se lève sur sa planche. La première vague de la journée est bonne, il dévale la pente. Mais il s'aperçoit trop tard que l’autre surfer a lui aussi décidé de s’engager. La collision est inévitable. Les planches s’entrechoquent, la dérive de Thomas se brise. Thomas a mal suite au choc. (perte de PV). Il s'énerve contre l’autre surfer qui n’a pas l’air de comprendre qu’il est en tort. Thomas explique pourquoi il n’aurait pas dû prendre la vague. L’autre surfeur s’échauffe, commence à parler fort et insulte Thomas.", 5, false, true, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas préfère attendre et ne pas risquer de se blesser avec l’autre surfeur moins prudent. Il l’aurait sans doute percuté. Thomas surf pendant 1h30, c’est une excellente session avec de belles vagues. Il n’y a pas grand monde à l’eau en plus. Il finit sur un joli barrel, où il passe au creux de la vague. Thomas est content de sa matinée, il retourne au van et roule pour aller en cours.", null, false, false, true, true, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas préfère attendre et ne pas risquer de se blesser avec l’autre surfeur moins prudent. Il l’aurait sans doute percuté. Thomas surf pendant 1h30, c’est une excellente session avec de belles vagues. Cependant il commence à se sentir mal à cause de la chaleur et de ses coups de soleil. (perte de PV). A cause de l’insolation, il décide d'arrêter la session. Il aurait dû mettre de la crème. Thomas sort de l’eau, retourne au van, boit beaucoup d’eau et prend une pause. Il finit par prendre le volant et roule pour rentrer chez lui.", null, false, true, true, true, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas perd patience et pousse le surfeur par les épaules. Le surfeur ne se laisse pas faire et frappe Thomas dans le nez. (perte de PV). Du sang s’écoule de son nez, Thomas décide de rentrer avec sa planche sans dérive. Sa session est un échec.", null, false, true, true, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas décide de rentrer avec sa planche sans dérive. Sa session est un échec mais il préfère ne pas rester. Il sort de l’eau, se change et prend le van pour aller en cours.", null, false, false, true, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Alice est une skateuse talentueuse et dévouée. Elle va au skate park tous les jours après les cours. Son père, un ancien skateur professionnel à la retraite lui a transmis cette passion de la glisse. Aujourd’hui, Alice souhaite travailler le crook nollie flip, une figure qui consiste à rider avec le nez de la planche sur une surface, souvent un rail. En sortant du lycée à 17h, elle se demande à quel skatepark aller. Deux possibilités s’offrent à elle : le skatepark Darwin qui est le plus proche mais souvent très prisé ou le skatepark des Chartrons qui l’oblige à faire 30 minutes de trajet en tram.", 1, true, false, false, false, 2);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Le skatepark est souvent prisé à cette heure là, beaucoup d'élèves se retrouvent pour skater. Alice n’aime pas quand il y a trop de monde, surtout quand il y a des petits qui découvrent la pratique et ne sont pas prudents. Alice commence à travailler le crook nollie flip. Elle tombe souvent, sans se faire mal. Cependant la dernière chute abîme la planche : le bois au niveau des trucks est craquelé. Alice s'énerve de la situation (perte de PV)Elle hésite à poursuivre sa session, ayant conscience qu’une planche fissurée est dangereuse.", 2, false, true, false, false, 2);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Alice décide de poursuivre son entraînement, jugeant que la planche n’est pas trop abîmée. Elle prend son élan et tente donc un crook nollie flip. La réception est violente, le choc casse la planche et Alice tombe. Heureusement Alice ne sait pas fait mal mais sa planche est pliée en deux. Elle s’en veut d’avoir mal évalué la sévérité des dégâts de la planche. Sa session doit donc s’arrêter là. Alice est frustrée et agacée, elle va en plus devoir racheter une planche.", null, false, false, true, false, 2);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Alice ne préfère pas prendre le risque de casser la planche et décide de rentrer. Cependant, avant de partir, un ami à elle l’accoste. Il lui demande pourquoi à peine arrivée, elle quitte le skatepark. Alice lui montre sa planche abîmée. Charlie, son ami, lui montre alors son sac avec deux planches. Il lui en prête une en lui expliquant qu’il amène toujours une planche de secours pour éviter cette situation. Alice le remercie. Elle est ravie, sa session n’est donc pas terminée ! Elle poursuit donc son entraînement. Il y a toujours beaucoup de monde mais le rail du fond n’est pas très prisé. Elle s’installe donc là bas et travaille le crook nollie flip. Après une heure de session intensive, sa maîtrise du crook nollie flip est en bonne progression. Elle est un peu fatiguée et se demande si elle continue à skater ou si elle rentre.", 3, false, false, false, false, 2);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Bien qu’un peu fatiguée, Alice trouve dommage de s’arrêter là. Elle décide donc de skater un peu dans Darwin pour rentrer d’autres figures qu’elle maîtrise déjà. Cependant, Alice a moins de concentration et beaucoup d’enfants sont présents. En descendant une rampe, elle percute un petit garçon en trottinette (Perte de PV). Les lunettes du petit s’envolent et se brisent sur le sol. Le petit garçon commence à pleurer suite au choc. Alice est désolée et le console. Elle s’assure que le petit garçon n’est pas blessé. Heureusement il va bien. Cependant l’épaule d’Alice la fait souffrir. Elle donne son numéro au petit pour qu’il la contacte pour l’assurance des lunettes. Elle a mal au bras, elle aura surement un bel hématome. Elle pose la planche sur les affaires de Charlie, le salue rapidement et rentre chez elle, non satisfaite de sa session.", null, false, true, true, false, 2);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Alice est contente de sa session au skatepark. Elle a pu travailler comme elle le souhaitait et elle n’a pas été trop gênée par le monde. Elle rend donc la planche à son ami Charlie et propose de lui payer un verre pour le remercier. Charlie et Alice se retrouvent donc en terrasse à côté pour prendre un petit rafraîchissement.", null, false, false, true, true, 2);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Alice décide de se déplacer jusqu’au skatepark des Chartrons pour avoir des conditions optimales. Elle sait qu’il y a trop de monde à Drawin à cette heure là. Alice commence à travailler le crook nollie flip. Elle tombe souvent, mais sans se faire mal. Cependant la dernière chute abîme la planche : le bois au niveau des trucks est craquelé. Alice s'énerve de la situation (perte de PV). Elle hésite à poursuivre sa session, ayant conscience qu’une planche fissurée est dangereuse.", 2, false, true, false, false, 2);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Bien qu’un peu fatiguée, Alice trouve dommage de s’arrêter là. Elle décide donc de skater un peu pour rentrer d’autres figures qu’elle maîtrise déjà. Cependant, Alice a moins de concentration et lorsqu’elle tente un backflip en flat, elle retombe mal sur son pied d’appuie. Sa cheville lui fait extrêmement mal. Charlie l’aide à se relever et la porte jusqu’à sa voiture. Ils décident d’aller aux urgences pour s’assurer qu’Alice ne se soit pas blessée gravement. L’attente est longue aux urgences mais Alice finit par faire une radio. Les résultats sont formels : Alice s’est fracturé le péroné.", null, false, false, true, false, 2);


insert into choice (cho_ste,cho_description,sto_id) values
(1,"Partir à l'aube", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(1,"Partir à 14h", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(2, "Surfer sans leash", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(2, "Surfer avec leash", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(3, "Mettre de la crème solaire", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(3, "Ne pas mettre de crème solaire", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(4, "Prendre la vague", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(4, "Ne pas prendre la vague", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(5, "S'énerver et pousser le surfer", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(5, "Rester chill", 1);
insert into choice (cho_ste,cho_description,sto_id) values
(1, "Skatepark Darwin", 2);
insert into choice (cho_ste,cho_description,sto_id) values
(1, "Skatepark Chartrons", 2);
insert into choice (cho_ste,cho_description,sto_id) values
(2, "Continuer avec la planche fissurée", 2);
insert into choice (cho_ste,cho_description,sto_id) values
(2, "Arrêter la session", 2);
insert into choice (cho_ste,cho_description,sto_id) values
(3, "Continuer à skater", 2);
insert into choice (cho_ste,cho_description,sto_id) values
(3, "Rentrer chez elle", 2);

insert into relation (cho_id,cho_related,ste_id) values
(1, null, 2);
insert into relation (cho_id,cho_related,ste_id) values
(2, null, 3);
insert into relation (cho_id,cho_related,ste_id) values
(3, null, 4);
insert into relation (cho_id,cho_related,ste_id) values
(4, null, 5);
insert into relation (cho_id,cho_related,ste_id) values
(5, 1, 7);
insert into relation (cho_id,cho_related,ste_id) values
(5, 2, 8);
insert into relation (cho_id,cho_related,ste_id) values
(6, null, 6);
insert into relation (cho_id,cho_related,ste_id) values
(7, null, 9);
insert into relation (cho_id,cho_related,ste_id) values
(8, 5, 10);
insert into relation (cho_id,cho_related,ste_id) values
(8, 6, 11);
insert into relation (cho_id,cho_related,ste_id) values
(9, null, 12);
insert into relation (cho_id,cho_related,ste_id) values
(10, null, 13);
insert into relation (cho_id,cho_related,ste_id) values
(11, null, 15);
insert into relation (cho_id,cho_related,ste_id) values
(12, null, 20);
insert into relation (cho_id,cho_related,ste_id) values
(13, null, 16);
insert into relation (cho_id,cho_related,ste_id) values
(14, null, 17);
insert into relation (cho_id,cho_related,ste_id) values
(15, null, 18);
insert into relation (cho_id,cho_related,ste_id) values
(15, null, 21);
insert into relation (cho_id,cho_related,ste_id) values
(16, null, 19);




insert into user (usr_name,usr_email,usr_password,usr_admin) values
("correcteur","blabla@gmail.com","$2y$10$jXpvLcb8y3WVhDnLOB5bt.d9Vpu2by.je9PaIY8j5ZRnvt0B6Yphm",0);
insert into user (usr_name,usr_email,usr_password,usr_admin) values
("correcteur_admin","blabla1@gmail.com","$2y$10$xwHNOcoZX3ov7/U10Uj6k.i0gO7PMuA9tkBjObi2iPH2qBigACM5G",1);