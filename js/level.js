level1 = 270;
level2 = 1080;
level3 = 2430;
level4 = 4320;
level5 = 6750;
level6 = 9720;
level7 = 13230;
level8 = 17280;
level9 = 21870;
level10 = 27000;

function exp_level(num){

    if(num <= level1){

        return 1;

    } else if(num <= level2){

        return 2;

    } else if(num <= level3){

        return 3;

    } else if(num <= level4){

        return 4;

    } else if(num <= level5){

        return 5;

    } else if(num <= level6){

        return 6;

    } else if(num <= level7){

        return 7;

    } else if(num <= level8){

        return 8;

    } else if(num <= level9){

        return 9;

    } else if(num <= level10){

        return 10;

    }

}

function  exp_barra(num){

    if(num <= level1){

        return (100 * num) / level1;

    } else if(num <= level2){

        return (100 * (num - level1))/ (level2-level1);

    } else if(num <= level3){

        return (100 * (num - level2))/ (level3-level2);

    } else if(num <= level4){

        return (100 * (num - level3))/ (level4-level3);

    } else if(num <= level5){

        return (100 * (num - level4))/ (level5-level4);

    } else if(num <= level6){

        return (100 * (num - level5))/ (level6-level5);

    } else if(num <= level7){

        return (100 * (num - level6))/ (level7-level6);

    } else if(num <= level8){

        return (100 * (num - level7))/ (level8-level7);

    } else if(num <= level9){

        return (100 * (num - level8))/ (level9-level8);

    } else if(num <= level10){

        return (100 * (num - level9))/ (level10-level9);

    }

}