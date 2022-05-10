insert into story values
(1, "Près de l'océan", "Vous incarnez un jeune surfeur de 21 ans. Il a pour habitude de prendre sa voiture et d’aller à l’eau tous les jours. En effet, Thomas à la chance d’habiter proche de la plage de Hossegor. Embarquez avec Thomas dans cette folle aventure !", "Affiche_Ocean.png", 0, 0);
insert into story values
(2, "Asphalte", "Alice est une skateuse bordelaise qui adore s'entraîner après les cours. Elle a pour habitude de se rendre aux skatepark Darwin et à celui des Chartrons. Venez découvrir le quotidien riche en actions d'Alice.", "Affiche_Skate", 0, 0);
insert into story values
(3, "Babysitting", "Babysitting est un film français réalisé par Philippe Lacheau et Nicolas Benamou, sorti en 2014. Il s'agit du premier film interprété par une grande partie de La Bande à Fifi, troupe révélée par Canal+. C'est le premier film français à allier prises de vues traditionnelles et found footage, à l'image de Projet X.", "babysitting.jpg", 0, 0);

insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas est un surfeur landais de 21 ans. Il a pour habitude de surfer tous les jours depuis son enfance. Il baigne dans le surf depuis toujours, ses parents l’ont toujours emmené lorsqu'ils partaient surfer. Ils ont une maison à 10 minutes en voiture de la plage d’Hossegor.", "A",true, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas prend rapidement sa douche et son petit déjeuner. Il regarde les prévisions de surf sur WindGuru, 1m80 en début de matinée avec 10 secondes de période. Il est content des conditions. Thomas prend sa combinaison, sa planche et file dans son van. Il fait encore nuit sur la route. Il se gare, se change, attrape sa planche et part sur le sable. Il s’échauffe les muscles avant de partir à l’eau. Il court en direction de l’océan et se jette sur sa planche une fois à l’eau. Il rame en direction du large et prend une première vague. Son leash se casse directement.", "B", false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas prend rapidement sa douche et prépare un brunch. Il regarde les prévisions de surf sur WindGuru en mangeant, 2m80 en début d’après-midi avec 10 secondes de période. Il est content des conditions même si les vagues vont être puissantes. Thomas prend sa combinaison, sa planche et file dans son van. Une fois arrivé à la plage, il se gare, se change et part sur le sable avec sa planche. Il s’échauffe les muscles avant de partir à l’eau. Il court en direction de l’océan et se jette sur sa planche une fois à l’eau. Il rame en direction du large et prend une première vague. Son leash se casse directement.", "B", false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas veut quand même prendre quelques vagues avant de retourner au van chercher un nouveau leash. La vague suivante est puissante, il tombe de la planche, cogne sa tête contre le sable. Il s'évanouit dans l’eau.", null, false, false, true, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas retourne au van, et prend un nouveau leash. Il voit le tube de crème solaire, mais il est impatient de retourner à l’eau. Il se demande s’il prend le temps d’en mettre.", "C",false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas hésite à peine et repars directement à l’eau, il fait nuageux de toute façon. Il regarde l’heure sur son téléphone : 7h36. Il a encore 2h pour surfer avant son cours à 10h10. Il commence à ramer en direction du large, première salve de vagues. Il voit quelqu’un s’apprêtant à prendre la même vague que lui. Mais Thomas a la priorité, il hésite à s’engager.", "D", false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Bien que Thomas soit frustré d'avoir cassé son leash et dû interrompre sa session pour revenir au van, il connaît l’importance de se crémer pour éviter les insolations. Il regarde l’heure sur son téléphone : 7h36. Il a encore le temps de surfer avant son cours à 10h10. Il commence à ramer en direction du large, première salve de vagues. Il voit quelqu’un s’apprêtant à prendre la même vague que lui. Mais Thomas a la priorité, il hésite à s’engager.", "D", false, false, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas se place pour prendre la vague, rame énergiquement et se lève sur sa planche. La première vague de la journée est bonne, il dévale la pente. Mais il s'aperçoit trop tard que l’autre surfer a lui aussi décidé de s’engager. La collision est inévitable. Les planches s’entrechoquent, la dérive de Thomas se brise. Thomas a mal suite au choc. (perte de PV). Il s'énerve contre l’autre surfer qui n’a pas l’air de comprendre qu’il est en tort. Thomas explique pourquoi il n’aurait pas dû prendre la vague. L’autre surfeur s’échauffe, commence à parler fort et insulte Thomas.", "E", false, true, false, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas préfère attendre et ne pas risquer de se blesser avec l’autre surfeur moins prudent. Il l’aurait sans doute percuté. Thomas surf pendant 1h30, c’est une excellente session avec de belles vagues. Il n’y a pas grand monde à l’eau en plus. Il finit sur un joli barrel, où il passe au creux de la vague. Thomas est content de sa matinée, il retourne au van et roule pour aller en cours.", null, false, false, true, true, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas préfère attendre et ne pas risquer de se blesser avec l’autre surfeur moins prudent. Il l’aurait sans doute percuté. Thomas surf pendant 1h30, c’est une excellente session avec de belles vagues. Cependant il commence à se sentir mal à cause de la chaleur et de ses coups de soleil. (perte de PV). A cause de l’insolation, il décide d'arrêter la session. Il aurait dû mettre de la crème. Thomas sort de l’eau, retourne au van, boit beaucoup d’eau et prend une pause. Il finit par prendre le volant et roule pour rentrer chez lui.", null, false, true, true, true, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas perd patience et pousse le surfeur par les épaules. Le surfeur ne se laisse pas faire et frappe Thomas dans le nez. (perte de PV). Du sang s’écoule de son nez, Thomas décide de rentrer avec sa planche sans dérive. Sa session est un échec.", null, false, true, true, false, 1);
insert into step (ste_description,ste_choiceType,ste_start,ste_lossPV,ste_end,ste_victory,sto_id) values
("Thomas décide de rentrer avec sa planche sans dérive. Sa session est un échec mais il préfère ne pas rester. Il sort de l’eau, se change et prend le van pour aller en cours.", null, false, false, true, false, 1);

insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("A","aube","Partir à l'aube",2);
insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("A","14h","Partir à 14h", 3);
insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("B","sansLeash", "Surfer sans leash", 4);
insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("B","avecLeash", "Surfer avec leash", 5);
insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("C","avecCreme", "Mettre de la crème solaire", 6);
insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("C","sansCreme", "Ne pas mettre de crème solaire", 7);
insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("D","prendreVague", "Prendre la vague", 8);
insert into choice (cho_ste,cho_related,cho_name,cho_description,ste_id) values
("D", 5, "pasPrendreVagueAC", "Ne pas prendre la vague", 9);
insert into choice (cho_ste,cho_related,cho_name,cho_description,ste_id) values
("D", 6, "pasPrendreVagueSC", "Ne pas prendre la vague", 10);
insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("E","colere", "S'énerver et pousser le surfer", 11);
insert into choice (cho_ste,cho_name,cho_description,ste_id) values
("E","chill", "Rester chill", 12);

insert into user (usr_name,usr_email,usr_password,usr_admin) values
("correcteur","blabla@gmail.com","mdp_correcteur_1234",0);
insert into user (usr_name,usr_email,usr_password,usr_admin) values
("correcteur_admin","blabla1@gmail.com","mdp_correcteur_1234",1);