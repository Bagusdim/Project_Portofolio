import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class Mover here.
 * 
 * @author (Bagus Dimas Adam M) 
 * @version (15 APRIL 2020)
 */
public class Mover extends Actor
{   
    public void act() 
    {
       
    }    
   
    public void gerak(GreenfootImage A, GreenfootImage B){
        if(Greenfoot.isKeyDown("down")){
            setLocation(getX(),getY()+5);
        }
        if(Greenfoot.isKeyDown("up")){
            setLocation(getX(),getY()-5);
        }
        if(Greenfoot.isKeyDown("right")){
            setLocation(getX()+5,getY());
            setImage(A);
        }
        if(Greenfoot.isKeyDown("left")){
            setLocation(getX()-5,getY());
            setImage(B);
        }
    }
    
    public void eat(){
        if(isTouching(KudaLaut.class)){
           removeTouching(KudaLaut.class);
           BackWorld World=(BackWorld)getWorld();
           World.addScore();
           Greenfoot.playSound("Amm.wav");
        }
    }
}
