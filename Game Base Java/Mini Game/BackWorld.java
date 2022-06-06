import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class BackWorld here.
 * 
 * @author (Bagus Dimas Adam M) 
 * @version (15 APRIL 2020)
 */
public class BackWorld extends World
{
    private int score;
    int evolve=1;
    public BackWorld()
    {    
        // Create a new world with 600x400 cells with a cell size of 1x1 pixels.
        super(700, 400, 1);
        Prepare();
        showText("Score : "+score,600,30 );
        prepare();
    }

    LittleFish littlefish = new LittleFish();
    BigFish bigfish= new BigFish();

    private void Prepare(){
        addObject(littlefish, 700/2, 400/2);
    }  

    public void respawnKudaLaut(){
        if(Greenfoot.getRandomNumber(100)<1){
            if(Greenfoot.getRandomNumber(2)==1){
                addObject(new KudaLaut(0),5,Greenfoot.getRandomNumber(380));
            }else{
                addObject(new KudaLaut(1),680,Greenfoot.getRandomNumber(380));
            }
        }
    }

    public void addScore(){
        score=score+1;
    }

    public void evolve(){
        if(score==10&&evolve==1){
            addObject(bigfish, littlefish.getX(), littlefish.getY());
            removeObject(littlefish);
            evolve--;
        }
        if(score==100)
        {
            showText("YOU WIN",350,250);
            Greenfoot.stop();
            Greenfoot.playSound("win.wav");
        }else
        {
            showText("Score : "+score,600,30 );
        }
    }

    public void act(){
        respawnKudaLaut();
        showText("Score : "+score,600,30 );
        evolve();
    }

    
    
    private void prepare()
    {
    }
}