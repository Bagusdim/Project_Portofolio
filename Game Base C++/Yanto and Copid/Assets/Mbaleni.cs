using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.SceneManagement;//dinggo maen restart/mbaleni maen

public class Mbaleni : MonoBehaviour
{
    // Start is called before the first frame update
    void Start()
    {
        
    }

    // Update is called once per frame
    void Update()
    {
        if (Input.GetKeyDown(KeyCode.R))//nek mencet R game e bakalan restart
        {
            Time.timeScale = 1;//supoyo nek restart ora macet/ langsung maen
            SceneManager.LoadScene(SceneManager.GetActiveScene().buildIndex);//iki dinggo ngeload scene sing lagi dilakoni
        }
    }
}
