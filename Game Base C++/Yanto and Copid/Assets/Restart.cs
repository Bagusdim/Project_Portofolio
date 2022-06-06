using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;//dinggo maen restart/mbaleni maen


public class Restart : MonoBehaviour
{
    void restart()
        {
       
            Time.timeScale = 1;//supoyo nek restart ora macet/ langsung maen
            SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex);//iki dinggo ngeload scene sing lagi dilakoni
        }

}
